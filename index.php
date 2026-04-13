<?php

include("inc/conn.php");
// Generate AES token
function generateAESToken($data)
{
    $secret_key = "my_secret_key_123456";
    $secret_iv  = "my_secret_iv_123456";

    $key = hash('sha256', $secret_key);
    $iv  = substr(hash('sha256', $secret_iv), 0, 16);

    return base64_encode(openssl_encrypt($data, "AES-256-CBC", $key, 0, $iv));
}

// Get IP address
function getUserIP()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) return $_SERVER['HTTP_CLIENT_IP'];
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) return explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0];
    return $_SERVER['REMOTE_ADDR'];
}

// Get Operating System
function getUserOS()
{
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $osArray = [
        '/windows nt 10/i'     => 'Windows 10',
        '/windows nt 6.3/i'    => 'Windows 8.1',
        '/windows nt 6.2/i'    => 'Windows 8',
        '/windows nt 6.1/i'    => 'Windows 7',
        '/macintosh|mac os x/i' => 'Mac OS X',
        '/linux/i'             => 'Linux',
        '/iphone/i'            => 'iPhone',
        '/android/i'           => 'Android',
        '/ipad/i'              => 'iPad'
    ];
    foreach ($osArray as $regex => $value) {
        if (preg_match($regex, $userAgent)) return $value;
    }
    return "Unknown OS";
}

// Get Browser
function getUserBrowser()
{
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $browsers = [
        '/msie/i'       => 'Internet Explorer',
        '/firefox/i'    => 'Firefox',
        '/chrome/i'     => 'Chrome',
        '/safari/i'     => 'Safari',
        '/edge/i'       => 'Edge',
        '/opera/i'      => 'Opera',
        '/mobile/i'     => 'Mobile Browser'
    ];
    foreach ($browsers as $regex => $value) {
        if (preg_match($regex, $userAgent)) return $value;
    }
    return "Unknown Browser";
}

// Get Location using ip-api
function getLocationData($ip)
{
    $url = "http://ip-api.com/json/{$ip}?fields=status,country,regionName,city,query";
    $response = @file_get_contents($url);
    if ($response) {
        $data = json_decode($response, true);
        if ($data['status'] === 'success') {
            return [
                'ip'      => $data['query'],
                'country' => $data['country'],
                'region'  => $data['regionName'],
                'city'    => $data['city']
            ];
        }
    }
    return [
        'ip'      => $ip,
        'country' => 'Unknown',
        'region'  => 'Unknown',
        'city'    => 'Unknown'
    ];
}

// Gather all info
$ip = getUserIP();
$os = getUserOS();
$browser = getUserBrowser();
$location = getLocationData($ip);
$country = $location['country'];
$region  = $location['region'];
$city    = $location['city'];

// Check if IP exists
$stmt = $pdo->prepare("SELECT COUNT(*) FROM visitors WHERE ip_address = ?");
$stmt->execute([$ip]);
$count = $stmt->fetchColumn();

if ($count == 0) {
    // Generate unique AES token for this visitor
    $token = generateAESToken($ip . time());

    // Insert new visitor
    $insert = $pdo->prepare("INSERT INTO visitors (ip_address, operating_system, country, `state/region`, city, browser, token) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $insert->execute([$ip, $os, $country, $region, $city, $browser, $token]);

    // Send email notification
    require_once('PHPMailer/PHPMailerAutoload.php');
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'mail.deevant.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'notifications@deevant.com';
        $mail->Password   = 'NOTIFICATIONS@deevant2026';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;

        $mail->setFrom('notifications@deevant.com', 'Deevant Innovations Notification');
        $mail->addAddress('francisnwankwo1972@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'New Unique Visitor Alert';
        $mail->Body    = "
            <h3>New Unique Visitor</h3>
            <p><strong>IP Address:</strong> $ip</p>
            <p><strong>Operating System:</strong> $os</p>
            <p><strong>Browser:</strong> $browser</p>
            <p><strong>Country:</strong> $country</p>
            <p><strong>Region:</strong> $region</p>
            <p><strong>City:</strong> $city</p>
            <p><small>Time: " . date('Y-m-d H:i:s') . "</small></p>
        ";

        $mail->send();
    } catch (Exception $e) {
        // Handle email error silently
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Deevant</title>
    <link rel="icon" href="images/deevant-icon2.jpeg">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-papfY0xTq1Qm9G+N0a2C+G8p7G5tVx1OzOfh1aUeJONxvT5v0F0sL3k5u+K4m0j1n7xR27RZDJx0kX75XED9CQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@500;600;700;800&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        upsteamRed: '#601000',
                        upsteamGray: '#7a7a7a',
                    },
                    keyframes: {
                        slideInLeft: {
                            '0%': {
                                transform: 'translateX(-100%)',
                                opacity: '0'
                            },
                            '100%': {
                                transform: 'translateX(0)',
                                opacity: '1'
                            }
                        }
                    },
                    animation: {
                        slideInLeft: 'slideInLeft 1s ease-out forwards'
                    }
                }
            }
        }
    </script>
</head>
<style>
    html {
        scroll-behavior: smooth;
    }

    body {
        overflow-x: hidden;
    }

    :root {
        --deevant-primary: #1f9d9c;
        /* deep tech navy – safe & professional */
        --deevant-accent: #1f9d9c;
        /* modern tech blue */
    }

    @media (max-width: 1024px) and (min-width: 768px) {
        .main {
            padding-top: 40px;
        }
    }

    @media (max-width: 767px) {
        .main {
            padding-top: 20px;
        }
    }
</style>

<body>
    <?php
    include('inc/header.php');
    ?>

    <section class="bg-white main">
        <div class="container mx-auto max-w-7xl px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

                <!-- Left Content -->
                <div>
                    <h2 class="text-[#1f9d9c] font-['Sacramento'] text-5xl md:text-6xl leading-tight mb-6">
                        Develop. Automate. Design.
                    </h2>

                    <p class="text-gray-600 text-lg leading-relaxed">
                        <b>DRIVING DIGITAL EXCELLENCE</b> <br><br>

                        We deliver cutting-edge technology solutions that transform businesses. Our services integrate <b>web</b> and <b>mobile development</b>, <b>UI/UX design</b>, and <b>intelligent automation</b> with professional <b>photography</b> and <b>cinematography</b>. From <b>server room setups</b> and <b>internet installations</b> to <b>IT training</b>, <b>recruitement</b> and <b>technical support</b>, we provide the <b>strategic infrastructure</b> and <b>creative media</b> needed to drive efficiency, growth, and digital innovation.
                    </p>
                    <br><br>
                    <a href="#contact" class="inline-block px-6 py-3 bg-[#6e6e6e] text-white font-medium rounded-lg
                    transition duration-300 hover:bg-[#1f9d9c] hover:text-white">
                        Get Started
                    </a>

                </div>

                <!-- Right Image (Animated) -->
                <div
                    class="relative overflow-hidden opacity-0 translate-x-20 transition-all duration-1000 ease-out slide-in-right">
                    <img src="images/deevant-home.jpeg" alt="Technology solutions"
                        class="w-full h-auto rounded-xl shadow-lg">
                </div>

            </div>
        </div>
    </section>

    <!-- <section class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center mb-12">
                <h3 class="text-3xl md:text-4xl font-bold text-gray-900 text-[#1f9d9c] font-['Sacramento']"
                    style="color:#1f9d9c;">
                    Our Partners
                </h3>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
                    We collaborate with forward-thinking brands and professionals to deliver innovative and impactful
                    technology solutions.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">

                <div
                    class="bg-white rounded-xl shadow-sm border border-gray-200 py-8 text-center transition duration-300 hover:bg-[#1f9d9c] hover:text-white">
                    <h4 class="text-lg font-semibold">
                        Khaveli
                    </h4>
                </div>

                <div
                    class="bg-white rounded-xl shadow-sm border border-gray-200 py-8 text-center transition duration-300 hover:bg-[#1f9d9c] hover:text-white">
                    <h4 class="text-lg font-semibold">
                        Jerrykay
                    </h4>
                </div>

                <div
                    class="bg-white rounded-xl shadow-sm border border-gray-200 py-8 text-center transition duration-300 hover:bg-[#1f9d9c] hover:text-white">
                    <h4 class="text-lg font-semibold">
                        Techbyfrancis
                    </h4>
                </div>

                <div
                    class="bg-white rounded-xl shadow-sm border border-gray-200 py-8 text-center transition duration-300 hover:bg-[#1f9d9c] hover:text-white">
                    <h4 class="text-lg font-semibold">
                        Yemstechnology
                    </h4>
                </div>

            </div>

        </div>
    </section> -->

    <section class="bg-[#00cec9] py-32 px-20">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

            <!-- Left Content -->
            <div>
                <h4 class="text-4xl md:text-4xl font-bold text-[#6e6e6e] leading-tight mb-4 font-[Sacramento]">
                    Empowering Businesses with Innovative Technology
                </h4>
            </div>

            <!-- Right Content -->
            <div>
                <p class="text-[#6e6e6e] text-lg md:text-xl leading-relaxed">
                    Engineering Growth Through Bespoke Technology. We deliver high-performance tech solutions tailored
                    to your unique operational DNA. By aligning our strategy with your specific goals, we eliminate
                    bottlenecks and unlock new levels of organizational efficiency.
                </p>
            </div>

        </div>
    </section>


    <section class="bg-gray-50 py-20" id="services">
        <div class="max-w-7xl mx-auto px-6 text-center">

            <h3 class="text-3xl md:text-4xl font-bold mb-4 text-[#1f9d9c] font-['Sacramento']">
                Our Services
            </h3>
            <p class="max-w-3xl mx-auto mb-12 text-lg leading-relaxed">
                From robust infrastructure to seamless cloud integration, our expertise spans the full technological
                spectrum. We architect ecosystems that simplify complex workflows and turn technical debt into a competitive engine.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

                <div class="group bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition duration-300 flex flex-col text-left">
                    <img src="images/services1.jpeg" alt="Web and Mobile Development" class="w-full h-40 object-cover rounded-md mb-4">
                    <h4 class="text-xl font-semibold mb-2 font-[Sacramento]" style="color:#1f9d9c;">Web & Mobile App Development</h4>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">
                        We create bespoke web and mobile solutions that extend your brand, combining intuitive design with scalable, high-performance technology.
                    </p>
                    <a href="web&app-dev" class="mt-auto text-[#1f9d9c] font-semibold text-sm flex items-center group-hover:underline">
                        Learn More <span class="ml-1 transition-transform duration-300 group-hover:translate-x-1">→</span>
                    </a>
                </div>

                <div class="group bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition duration-300 flex flex-col text-left">
                    <img src="images/services2.jpeg" alt="Visual Design" class="w-full h-40 object-cover rounded-md mb-4">
                    <h4 class="text-xl font-semibold mb-2 font-[Sacramento]" style="color:#1f9d9c;">Visual Design</h4>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">
                        We craft cohesive brand identities and visual designs that combine elegance with strategy, making your brand memorable and intuitive.
                    </p>
                    <a href="visual-design" class="mt-auto text-[#1f9d9c] font-semibold text-sm flex items-center group-hover:underline">
                        Learn More <span class="ml-1 transition-transform duration-300 group-hover:translate-x-1">→</span>
                    </a>
                </div>

                <div class="group bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition duration-300 flex flex-col text-left">
                    <img src="images/services3.jpeg" alt="Dedicated Support Team" class="w-full h-40 object-cover rounded-md mb-4">
                    <h4 class="text-xl font-semibold mb-2 font-[Sacramento]" style="color:#1f9d9c;">Dedicated Support Team</h4>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">
                        We provide tailored, proactive tech support that integrates with your team, ensuring rapid troubleshooting and optimized performance.
                    </p>
                    <a href="support-team" class="mt-auto text-[#1f9d9c] font-semibold text-sm flex items-center group-hover:underline">
                        Learn More <span class="ml-1 transition-transform duration-300 group-hover:translate-x-1">→</span>
                    </a>
                </div>

                <div class="group bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition duration-300 flex flex-col text-left">
                    <img src="images/services4.jpeg" alt="Advanced Automation" class="w-full h-40 object-cover rounded-md mb-4">
                    <h4 class="text-xl font-semibold mb-2 font-[Sacramento]" style="color:#1f9d9c;">Advanced Automation</h4>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">
                        We design intelligent automation and AI-driven workflows that streamline operations and free your team for strategic growth.
                    </p>
                    <a href="automation" class="mt-auto text-[#1f9d9c] font-semibold text-sm flex items-center group-hover:underline">
                        Learn More <span class="ml-1 transition-transform duration-300 group-hover:translate-x-1">→</span>
                    </a>
                </div>

            </div>

            <div class="flex flex-col md:flex-row justify-center gap-10 mt-10">

                <div class="group bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition duration-300 w-full md:w-80 flex flex-col text-left">
                    <img src="images/services5.jpeg" alt="Tailored Technology Workflows" class="w-full h-40 object-cover rounded-md mb-4">
                    <h4 class="text-xl font-semibold mb-2 font-[Sacramento]" style="color:#1f9d9c;">Tailored Workflows</h4>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">
                        We create bespoke technology workflows that remove bottlenecks and provide an agile foundation for innovation.
                    </p>
                    <a href="tailored-workflows" class="mt-auto text-[#1f9d9c] font-semibold text-sm flex items-center group-hover:underline">
                        Learn More <span class="ml-1 transition-transform duration-300 group-hover:translate-x-1">→</span>
                    </a>
                </div>

                <div class="group bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition duration-300 w-full md:w-80 flex flex-col text-left">
                    <img src="images/services6.jpeg" alt="Integrated Solutions" class="w-full h-40 object-cover rounded-md mb-4">
                    <h4 class="text-xl font-semibold mb-2 font-[Sacramento]" style="color:#1f9d9c;">Integrated Solutions</h4>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">
                        We unify <b>Networking</b>, <b>Convergence</b>, and <b>Collaboration</b> into secure, scalable ecosystems. Our expertise spans <b>IS Consulting</b>, <b>Next-Gen Security</b>, and <b>Procurement</b> . As an <b>Authorized Service Center</b> we provide <b>SLA-backed maintenance</b> and <b></b> to ensure high-performance business continuity.
                    </p>
                    <a href="integrated-solutions" class="mt-auto text-[#1f9d9c] font-semibold text-sm flex items-center group-hover:underline">
                        Learn More <span class="ml-1 transition-transform duration-300 group-hover:translate-x-1">→</span>
                    </a>
                </div>
                <div class="group bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition duration-300 w-full md:w-80 flex flex-col text-left">
                    <img src="images/services7.jpeg" alt="Integrated Solutions" class="w-full h-40 object-cover rounded-md mb-4">
                    <h4 class="text-xl font-semibold mb-2 font-[Sacramento]" style="color:#1f9d9c;">Recuritment & IT Training</h4>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">
                        We deliver <strong>top-tier talent and future-ready IT training that build high-performing, skilled teams</strong>. Through specialized recruitment and hands-on instruction in software development, system administration, and digital automation, we equip your workforce with the expertise needed to thrive in today’s evolving digital landscape.
                    </p>
                    <a href="recuritment&It-training" class="mt-auto text-[#1f9d9c] font-semibold text-sm flex items-center group-hover:underline">
                        Learn More <span class="ml-1 transition-transform duration-300 group-hover:translate-x-1">→</span>
                    </a>
                </div>
                <div class="group bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition duration-300 w-full md:w-80 flex flex-col text-left">
                    <img src="images/services9.jpeg" alt="Integrated Solutions" class="w-full h-40 object-cover rounded-md mb-4">
                    <h4 class="text-xl font-semibold mb-2 font-[Sacramento]" style="color:#1f9d9c;">Photography & Videography</h4>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">
                        We create <strong>high-end, cinematic visuals that elevate and define your brand </strong>combining technical expertise with artistic storytelling. From corporate productions and events to specialized industrial coverage, our work transforms real-world moments into powerful visual assets that drive engagement and strengthen your digital identity.
                    </p>
                    <a href="photography&videography" class="mt-auto text-[#1f9d9c] font-semibold text-sm flex items-center group-hover:underline">
                        Learn More <span class="ml-1 transition-transform duration-300 group-hover:translate-x-1">→</span>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 py-24 grid grid-cols-1 md:grid-cols-2 gap-16 items-center overflow-hidden">

        <!-- LEFT -->
        <div class="left opacity-0 -translate-x-20 transition-all duration-700 ease-out">
            <img src="images/WhatsApp Image 2026-02-02 at 4.11.32 PM.jpeg" alt="Technology Solutions"
                class="w-full rounded-2xl object-cover">
        </div>

        <!-- RIGHT -->
        <div class="right opacity-0 translate-x-20 transition-all duration-700 ease-out delay-100">
            <div class="space-y-6">
                <h3 class="text-3xl lg:text-4xl font-[Sacramento]" style="color:#1f9d9c;">
                    Tailored Technology for Your Business
                </h3>

                <p class="text-slate-600 leading-relaxed">
                    We don’t believe in one-size-fits-all. We immerse ourselves in the specific
                    mechanics of your business to architect bespoke technology solutions that
                    solve your most complex challenges. By aligning our innovative engineering
                    with your unique operational DNA, we create high-performance digital
                    ecosystems designed to eliminate friction and catalyze expansion.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mt-8">

                    <!-- Toolkit -->
                    <div
                        class="flex items-center gap-4 p-5 rounded-xl border border-slate-200 bg-white shadow-sm hover:shadow-md transition">
                        <div class="flex items-center justify-center w-11 h-11 rounded-lg bg-[#1f9d9c]/10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#1f9d9c]" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20 7h-3V5a2 2 0 00-2-2h-6a2 2 0 00-2 2v2H4a2 2 0 00-2 2v9a2 2 0 002 2h16a2 2 0 002-2V9a2 2 0 00-2-2z" />
                            </svg>
                        </div>
                        <p class="font-semibold text-slate-800">
                            Complete Toolkit
                        </p>
                    </div>

                    <!-- Data Sharing -->
                    <div
                        class="flex items-center gap-4 p-5 rounded-xl border border-slate-200 bg-white shadow-sm hover:shadow-md transition">
                        <div class="flex items-center justify-center w-11 h-11 rounded-lg bg-[#1f9d9c]/10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#1f9d9c]" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 8a3 3 0 11-6 0 3 3 0 016 0zM4 20a8 8 0 0116 0" />
                            </svg>
                        </div>
                        <p class="font-semibold text-slate-800">
                            Efficient Data Sharing
                        </p>
                    </div>

                    <!-- Flexibility -->
                    <div
                        class="flex items-center gap-4 p-5 rounded-xl border border-slate-200 bg-white shadow-sm hover:shadow-md transition">
                        <div class="flex items-center justify-center w-11 h-11 rounded-lg bg-[#1f9d9c]/10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#1f9d9c]" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6V4m0 16v-2m8-6h-2M6 12H4m12.364-5.364l-1.414 1.414M7.05 16.95l-1.414 1.414m0-11.314l1.414 1.414m9.9 9.9l1.414 1.414" />
                            </svg>
                        </div>
                        <p class="font-semibold text-slate-800">
                            Unrestricted Design Flexibility
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section
        class="bg-[#1f9d9c] pt-32 pb-28 px-6 opacity-0 translate-y-12 transition-all duration-700 ease-out reveal-section rounded-t-[80px]">
        <div class="max-w-7xl mx-auto text-center">

            <!-- Heading -->
            <h2 class="text-3xl lg:text-4xl mb-6 text-[#6e6e6e] font-[Sacramento]">
                Trusted by Industry Innovators
            </h2>

            <!-- Description -->
            <p class="max-w-4xl mx-auto text-white/90 leading-relaxed mb-16">
                Trusted by the world’s most forward-thinking industry innovators, we specialize in transforming
                complex business visions into high-impact digital realities. We understand that leadership requires
                more than just standard software; it demands bespoke technology solutions engineered for precision,
                security, and extreme scalability. By partnering with us, you gain access to a world-class engineering
                team dedicated to building agile frameworks that eliminate operational friction and catalyze
                market-disrupting growth. Join the ranks of those who refuse to settle for the status quo and let us
                build the foundation for your next great breakthrough.
            </p>

            <!-- Logos -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-10 items-center">
                <div class="flex justify-center">
                    <a href="https://techbyfrancis.com" target="_blank" rel="noopener noreferrer">
                        <img src="images/techbyfrancis linkedin.jpg" alt="Tech by Francis LinkedIn" class="h-14 object-contain grayscale opacity-0 translate-y-6
             hover:grayscale-0 hover:opacity-100
             transition duration-300 reveal-logo" />
                    </a>
                </div>


                <div class="flex justify-center">
                    <img src="images/maltina.jpg" alt="Maltina"
                        class="h-14 object-contain grayscale opacity-0 translate-y-6 hover:grayscale-0 hover:opacity-100 transition duration-300 reveal-logo">
                </div>

                <div class="flex justify-center">
                    <img src="images/shell.png" alt="Shell"
                        class="h-14 object-contain grayscale opacity-0 translate-y-6 hover:grayscale-0 hover:opacity-100 transition duration-300 reveal-logo">
                </div>

                <div class="flex justify-center">
                    <img src="images/air peace.png" alt="Air Peace"
                        class="h-14 object-contain grayscale opacity-0 translate-y-6 hover:grayscale-0 hover:opacity-100 transition duration-300 reveal-logo">
                </div>
            </div>

        </div>
    </section>

    <section
        class="bg-white py-28 px-6 opacity-0 translate-y-12 transition-all duration-700 ease-out reveal-testimonials">
        <div class="max-w-7xl mx-auto text-center">

            <!-- Section Header -->
            <h2 class="text-3xl lg:text-4xl font-bold text-[#6e6e6e] mb-4 font-[Sacramento]">
                Client Testimonials
            </h2>
            <p class="max-w-2xl mx-auto text-slate-600 mb-16">
                Hear from industry leaders who trust DEEVANT to deliver
                high-impact, scalable technology solutions.
            </p>

            <!-- Testimonials Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- Card 1 -->
                <div class="testimonial-card opacity-0 translate-y-8 transition-all duration-700 delay-100">
                    <div
                        class="flex flex-col justify-between p-8 rounded-2xl bg-slate-50 shadow-md hover:bg-[#1f9d9c] hover:shadow-xl transition h-full">
                        <p class="text-slate-700 hover:text-white leading-relaxed mb-6">
                            “DEEVANT truly understands the intricacies of our business and has provided
                            exceptional technology solutions that have significantly improved our operations.”
                        </p>
                        <div class="border-t border-slate-200 pt-4">
                            <p class="font-semibold text-slate-900 hover:text-white">Deena Levies</p>
                            <p class="text-sm text-slate-500 hover:text-white/80">Tech Innovations Inc.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="testimonial-card opacity-0 translate-y-8 transition-all duration-700 delay-200">
                    <div
                        class="flex flex-col justify-between p-8 rounded-2xl bg-slate-50 shadow-md hover:bg-[#1f9d9c] hover:shadow-xl transition h-full">
                        <p class="text-slate-700 hover:text-white leading-relaxed mb-6">
                            “Partnering with DEEVANT has been a game changer for us.
                            Their technology expertise has elevated our business to new heights.”
                        </p>
                        <div class="border-t border-slate-200 pt-4">
                            <p class="font-semibold text-slate-900 hover:text-white">Tom Smithenson</p>
                            <p class="text-sm text-slate-500 hover:text-white/80">Future Frontier Solutions</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="testimonial-card opacity-0 translate-y-8 transition-all duration-700 delay-300">
                    <div
                        class="flex flex-col justify-between p-8 rounded-2xl bg-slate-50 shadow-md hover:bg-[#1f9d9c] hover:shadow-xl transition h-full">
                        <p class="text-slate-700 hover:text-white leading-relaxed mb-6">
                            “DEEVANT’s commitment to excellence is unparalleled.
                            They have played a pivotal role in our technological advancements and success.”
                        </p>
                        <div class="border-t border-slate-200 pt-4">
                            <p class="font-semibold text-slate-900 hover:text-white">Tilly Green</p>
                            <p class="text-sm text-slate-500 hover:text-white/80">Visionary Ventures</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 sm:px-12 lg:px-24 py-24 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

        <!-- Text Content -->
        <div class="space-y-6">
            <h3 class="text-3xl lg:text-4xl font-bold text-[#6e6e6e] font-[Sacramento]">
                Discover Our Service Packages
            </h3>

            <p class="text-slate-600 leading-relaxed">
                Ready to elevate your digital infrastructure? Discover our service packages, meticulously curated to
                align with the varying scales of modern business ambition. We offer more than just tiered features; we
                provide tailored technology pathways designed to meet you exactly where you are and propel you to where
                you need to be. Whether you require a foundational visual identity or a fully integrated,
                high-performance automation ecosystem, our packages are engineered to deliver maximum strategic value.
                Dive into our offerings and find the precision-fit solution that will streamline your operations and
                catalyze your next phase of growth.
            </p>

            <a href="about"
                class="inline-block px-8 py-3 bg-[#1f9d9c]  text-white font-semibold rounded-lg shadow hover:bg-[#6e6e6e] transition-colors duration-300">
                Learn More
            </a>
        </div>

        <!-- Image -->
        <div class="flex justify-center lg:justify-end">
            <img src="images/WhatsApp Image 2026-02-02 at 8.59.02 AM.jpeg" alt="Service Packages"
                class="w-full max-w-md rounded-2xl object-cover">
        </div>

    </section>


    <section class="bg-white py-24 px-6 sm:px-12 lg:px-24 text-center flex flex-col items-center gap-8">

        <!-- Heading -->
        <h3 class="text-3xl lg:text-4xl font-bold max-w-3xl mx-auto leading-snug text-[#6e6e6e] font-[Sacramento]">
            Elevate your business with our innovative technology solutions and propel your growth to new heights.
        </h3>

        <!-- Button -->
        <a href="#contact"
            class="inline-block px-8 py-3 bg-[#1f9d9c] text-white font-semibold rounded-lg shadow hover:bg-[#6e6e6e] transition-colors duration-300">
            Get Started
        </a>

        <!-- Image -->
        <img src="images/WhatsApp Image 2026-02-02 at 8.59.02 AM (1).jpeg" alt="Innovative Technology"
            class="w-full max-w-lg rounded-2xl object-cover mt-6">

    </section>

    <?php
    include('inc/footer.php');
    ?>
    <button id="backToTop" aria-label="Back to top" class="fixed bottom-6 right-6 z-50
         flex items-center justify-center
         w-14 h-14 rounded-full
         bg-[#1f9d9c] text-white
         shadow-xl
         opacity-0 translate-y-6 pointer-events-none
         transition-all duration-500 ease-out
         hover:scale-105
         dark:bg-[#178f8e]">

        <!-- Progress Ring -->
        <svg class="absolute inset-0 w-full h-full -rotate-90" viewBox="0 0 100 100">
            <circle cx="50" cy="50" r="46" stroke="rgba(255,255,255,0.3)" stroke-width="6" fill="none" />
            <circle id="progressRing" cx="50" cy="50" r="46" stroke="white" stroke-width="6" fill="none"
                stroke-dasharray="289" stroke-dashoffset="289" stroke-linecap="round" />
        </svg>

        <!-- Arrow Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 relative z-10" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
        </svg>

        <!-- Tooltip -->
        <span class="absolute -top-10 px-3 py-1 text-xs rounded-md
           bg-black text-white opacity-0
           transition-opacity duration-300
           pointer-events-none
           group-hover:opacity-100">
            Back to top
        </span>
    </button>

</body>
<script>
    document.getElementById('menuBtn').onclick = () =>
        document.getElementById('mobileMenu').classList.toggle('hidden');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.remove('opacity-0', 'translate-x-20');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.3
    });

    document.querySelectorAll('.slide-in-right').forEach(el => {
        observer.observe(el);
    });

    document.addEventListener("DOMContentLoaded", () => {
        const elements = document.querySelectorAll(".left, .right");

        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.remove(
                            "opacity-0",
                            "translate-x-20",
                            "-translate-x-20"
                        );
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.3
            }
        );

        elements.forEach(el => observer.observe(el));
    });

    document.addEventListener("DOMContentLoaded", () => {
        const section = document.querySelector(".reveal-section");
        const logos = document.querySelectorAll(".reveal-logo");

        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {

                        // Reveal section
                        section.classList.remove("opacity-0", "translate-y-12");

                        // Stagger logos
                        logos.forEach((logo, index) => {
                            setTimeout(() => {
                                logo.classList.remove("opacity-0", "translate-y-6");
                            }, index * 120);
                        });

                        observer.unobserve(section);
                    }
                });
            }, {
                threshold: 0.3
            }
        );

        observer.observe(section);
    });

    document.addEventListener("DOMContentLoaded", () => {
        const section = document.querySelector(".reveal-testimonials");
        const cards = document.querySelectorAll(".testimonial-card");

        const observerr = new IntersectionObserver(
            (entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {

                        // Reveal section
                        section.classList.remove("opacity-0", "translate-y-12");

                        // Stagger cards
                        cards.forEach((card, index) => {
                            setTimeout(() => {
                                card.classList.remove("opacity-0", "translate-y-8");
                            }, index * 150);
                        });

                        observerr.unobserve(section);
                    }
                });
            }, {
                threshold: 0.25
            }
        );

        observerr.observe(section);
    });

    document.addEventListener("DOMContentLoaded", () => {
        const footer = document.querySelector(".reveal-footer");

        const observerrr = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    footer.classList.remove("opacity-0", "translate-y-12");
                    observerrr.unobserve(footer);
                }
            });
        }, {
            threshold: 0.3
        });

        observerrr.observe(footer);
    });

    const button = document.getElementById("backToTop");
    const ring = document.getElementById("progressRing");
    const circumference = 2 * Math.PI * 46;

    ring.style.strokeDasharray = circumference;

    let hideTimeout;

    function updateProgress() {
        const scrollTop = window.scrollY;
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const progress = scrollTop / docHeight;
        ring.style.strokeDashoffset = circumference * (1 - progress);
    }

    function showButton() {
        button.classList.remove("opacity-0", "translate-y-6", "pointer-events-none");
        button.classList.add("opacity-100", "translate-y-0");
        clearTimeout(hideTimeout);

        hideTimeout = setTimeout(() => {
            button.classList.add("opacity-0", "translate-y-6", "pointer-events-none");
            button.classList.remove("opacity-100", "translate-y-0");
        }, 3000);
    }

    window.addEventListener("scroll", () => {
        updateProgress();

        if (window.scrollY > 400) {
            showButton();
        }
    });

    button.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
</script>

<!-- Particle JS -->
<script src="https://cdn.jsdelivr.net/npm/tsparticles@2/tsparticles.bundle.min.js"></script>
<script>
    tsParticles.load("particles-bg", {
        fpsLimit: 60,
        background: {
            color: "transparent"
        },
        particles: {
            number: {
                value: 60,
                density: {
                    enable: true,
                    area: 800
                }
            },
            color: {
                value: "#00cec9"
            },
            shape: {
                type: "circle"
            },
            opacity: {
                value: 0.3,
                random: true
            },
            size: {
                value: {
                    min: 2,
                    max: 6
                },
                random: true
            },
            move: {
                enable: true,
                speed: 1.5,
                direction: "none",
                outModes: "out"
            },
            links: {
                enable: true,
                distance: 120,
                color: "#FFD700",
                opacity: 0.2,
                width: 1
            }
        },
        interactivity: {
            events: {
                onHover: {
                    enable: true,
                    mode: "repulse"
                },
                onClick: {
                    enable: true,
                    mode: "push"
                }
            },
            modes: {
                repulse: {
                    distance: 120
                },
                push: {
                    quantity: 4
                }
            }
        },
        detectRetina: true
    });
</script>

</html>