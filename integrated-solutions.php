<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integrated Solutions | Deevant</title>
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
</style>

<body>
    <?php
    include('inc/header.php');
    ?>

    <section class="bg-gradient-to-b from-gray-50 to-white">

        <!--SUPPORT TEAM SECTION -->
        <section id="team" class="py-24 px-6 sm:px-12 lg:px-24">

            <!-- Heading -->
            <div class="text-center mb-16 max-w-3xl mx-auto px-4">
                <h2 class="text-3xl sm:text-4xl font-bold font-['Sacramento'] text-[#1f9d9c] inline-block">
                    Unified Enterprise Architecture
                </h2>

                <div class="w-24 h-1 bg-gradient-to-r from-[#1f9d9c] to-teal-400 mx-auto mt-4 rounded-full"></div>

                <p class="mt-6 text-gray-600 text-lg sm:text-xl max-w-3xl mx-auto leading-relaxed">
                    Disconnected systems are a hidden liability in modern business environments. We engineer a unified enterprise architecture that bridges physical infrastructure and digital ecosystems transforming fragmented technology into a single, high-performance operational engine.
                </p>
            </div>

            <!-- IMAGE GRID -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">

                <div class="group overflow-hidden rounded-2xl shadow-md">
                    <img src="images/integrated-solution.jpeg" class="w-full h-[800px] object-cover transform group-hover:scale-110 transition duration-500 ease-in-out">
                </div>

                <div class="group overflow-hidden rounded-2xl shadow-md">
                    <img src="images/integrated-solution2.jpeg" class="w-full h-[800px] object-cover transform group-hover:scale-110 transition duration-500 ease-in-out">
                </div>

                <div class="group overflow-hidden rounded-2xl shadow-md">
                    <img src="images/integrated-solution3.jpeg" class="w-full h-[800px] object-cover transform group-hover:scale-110 transition duration-500 ease-in-out">
                </div>

                <div class="group overflow-hidden rounded-2xl shadow-md">
                    <img src="images/integrated-solution4.jpeg" class="w-full h-[800px] object-cover transform group-hover:scale-110 transition duration-500 ease-in-out">
                </div>

            </div>
        </section>


        <!-- INTEGRATED ENTERPRISE SOLUTIONS SERVICES -->
        <section class="py-24 px-6 sm:px-12 lg:px-24 bg-white">

            <div class="text-center mb-16">
                <h2 class="text-4xl sm:text-5xl font-bold text-[#1f9d9c]">
                    Unified Enterprise Architecture Services
                </h2>

                <div class="w-24 h-1 bg-gradient-to-r from-[#1f9d9c] to-teal-400 mx-auto mt-4 rounded-full"></div>

                <p class="mt-6 text-gray-600 text-lg sm:text-xl max-w-4xl mx-auto leading-relaxed">
                    Disconnected technology is a liability in modern business environments. We design and integrate your entire technical ecosystem from physical infrastructure to advanced digital systems into a unified architecture that delivers performance, resilience, and scalability.
                </p>
            </div>

            <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 text-gray-700">

                <li class="p-6 bg-gray-50 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300">
                    <strong>Bespoke Infrastructure & Connectivity:</strong> We design and deploy tailored network systems including Fiber, Microwave, and Satellite solutions engineered for full coverage, stability, and ultra-low latency performance.
                </li>

                <li class="p-6 bg-gray-50 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300">
                    <strong>Converged Security & Communication Systems:</strong> We integrate AI-powered CCTV, IP intercoms, and communication infrastructure into a single unified interface accessible across all devices.
                </li>

                <li class="p-6 bg-gray-50 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300">
                    <strong>Enterprise Systems Stewardship:</strong> We manage and optimize ERP, CRM, server environments, UPS systems, and environmental monitoring tools to ensure operational stability and uptime.
                </li>

                <li class="p-6 bg-gray-50 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300">
                    <strong>Elite IT Talent Recruitment:</strong> We source, vet, and deploy high-level technical professionals including network engineers, system administrators, and IT specialists aligned with your infrastructure needs.
                </li>

                <li class="p-6 bg-gray-50 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300">
                    <strong>SLA-Backed Managed Support:</strong> Our authorized service framework provides proactive monitoring, scheduled maintenance, firmware updates, audits, and rapid incident response to guarantee maximum uptime.
                </li>

                <li class="p-6 bg-gray-50 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300">
                    <strong>Unified Operational Control:</strong> We eliminate vendor fragmentation by consolidating all technical operations into one coordinated system, giving you complete visibility and control over your infrastructure.
                </li>

            </ul>

        </section>

        <!-- PREMIUM INTEGRATED OPERATIONS COPY -->
        <section class="py-24 px-6 sm:px-12 lg:px-24 bg-gray-50 text-gray-800">

            <div class="max-w-4xl mx-auto space-y-10">

                <!-- Intro -->
                <p class="text-lg sm:text-xl leading-relaxed">
                    Modern enterprises fail not because of lack of tools, but because of fragmented systems that refuse to work together.
                    We design and implement <span class="font-semibold">Unified Operational Architecture</span> that aligns your infrastructure, software, and communication layers into a single coordinated ecosystem.
                </p>

                <p class="text-lg sm:text-xl leading-relaxed">
                    Instead of managing disconnected platforms, your business operates through one synchronized environment where every process, system, and decision flows intelligently across your entire organization.
                </p>

                <!-- Features List -->
                <ul class="list-disc pl-5 space-y-4 text-lg sm:text-xl leading-relaxed text-gray-700">

                    <li>
                        <strong>End-to-End System Integration:</strong> We connect all critical business platforms operations, communication, data, and infrastructure into a unified ecosystem where information moves instantly without manual intervention.
                    </li>

                    <li>
                        <strong>Infrastructure Reliability Engineering:</strong> We design resilient environments that combine hardware stability, network optimization, and redundancy systems to ensure uninterrupted business continuity.
                    </li>

                    <li>
                        <strong>Operational Intelligence Layer:</strong> We embed monitoring and analytics into your systems, giving leadership real-time visibility into performance, efficiency, and potential risks before they escalate.
                    </li>

                    <li>
                        <strong>Workflow Synchronization Systems:</strong> Business processes are redesigned to operate in harmony across departments, eliminating duplication, delays, and communication gaps.
                    </li>

                    <li>
                        <strong>Managed Technical Ecosystem:</strong> We oversee your entire digital environment from updates and system health to performance tuning and security alignment ensuring everything operates at peak efficiency.
                    </li>

                </ul>

                <!-- Closing Statement -->
                <p class="text-lg sm:text-xl leading-relaxed">
                    The result is a fully synchronized enterprise system where technology no longer creates friction, but becomes the foundation for speed, clarity, and scalable growth.
                </p>

            </div>

        </section>

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

</html>