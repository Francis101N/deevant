<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dedicated Support Team | Deevant</title>
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
                    Dedicated Support Team
                </h2>

                <div class="w-24 h-1 bg-gradient-to-r from-[#1f9d9c] to-teal-400 mx-auto mt-4 rounded-full"></div>

                <p class="mt-6 text-gray-600 text-lg sm:text-xl max-w-3xl mx-auto leading-relaxed">
                    Technical friction shouldn’t slow your business. Our Dedicated Support Team acts as a seamless extension of your operations, proactively maintaining systems, optimizing workflows, and ensuring your technical infrastructure drives growth.
                </p>
            </div>

            <!-- IMAGE GRID -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">

                <div class="group overflow-hidden rounded-2xl shadow-md">
                    <img src="images/support-team.jpeg" class="w-full h-[800px] object-cover transform group-hover:scale-110 transition duration-500 ease-in-out">
                </div>

                <div class="group overflow-hidden rounded-2xl shadow-md">
                    <img src="images/support-team2.jpeg" class="w-full h-[800px] object-cover transform group-hover:scale-110 transition duration-500 ease-in-out">
                </div>

                <div class="group overflow-hidden rounded-2xl shadow-md">
                    <img src="images/support-team3.jpeg" class="w-full h-[800px] object-cover transform group-hover:scale-110 transition duration-500 ease-in-out">
                </div>

                <div class="group overflow-hidden rounded-2xl shadow-md">
                    <img src="images/support-team4.jpeg" class="w-full h-[800px] object-cover transform group-hover:scale-110 transition duration-500 ease-in-out">
                </div>

                <div class="group overflow-hidden rounded-2xl shadow-md">
                    <img src="images/support-team5.jpeg" class="w-full h-[800px] object-cover transform group-hover:scale-110 transition duration-500 ease-in-out">
                </div>
                <div class="group overflow-hidden rounded-2xl shadow-md">
                    <img src="images/support-team6.jpeg" class="w-full h-[800px] object-cover transform group-hover:scale-110 transition duration-500 ease-in-out">
                </div>

            </div>
        </section>


        <!-- DEDICATED SUPPORT TEAM SERVICES -->
        <section class="py-24 px-6 sm:px-12 lg:px-24 bg-white">

            <div class="text-center mb-16">
                <h2 class="text-4xl sm:text-5xl font-bold text-[#1f9d9c]">
                    Explore Our Dedicated Support Services
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-[#1f9d9c] to-teal-400 mx-auto mt-4 rounded-full"></div>

            </div>

            <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 text-gray-700">

                <li class="p-6 bg-gray-50 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300">
                    <strong>Proactive Infrastructure Management:</strong> Continuous monitoring and mitigation of system bottlenecks to ensure stability, security, and performance.
                </li>

                <li class="p-6 bg-gray-50 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300">
                    <strong>Integrated IT & Customer Support:</strong> Embedded support within Slack, Teams, and communication workflows for zero-latency responses.
                </li>

                <li class="p-6 bg-gray-50 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300">
                    <strong>Strategic Knowledge Transfer:</strong> Documentation, training, and guidance to empower your internal team and reduce dependency.
                </li>

                <li class="p-6 bg-gray-50 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300">
                    <strong>High-Availability Protocols:</strong> Tiered support for routine maintenance, audits, and emergency interventions to keep operations uninterrupted.
                </li>

                <li class="p-6 bg-gray-50 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300">
                    <strong>Continuous Optimization:</strong> Scheduled security patching, workflow refinement, and elimination of technical debt to maximize efficiency.
                </li>

                <li class="p-6 bg-gray-50 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300">
                    <strong>Silent, Reliable Engine:</strong> Our team ensures your business runs at peak capacity while your internal team focuses on core revenue-generating goals.
                </li>

            </ul>
        </section>

        <!-- PREMIUM COPY -->
        <section class="py-24 px-6 sm:px-12 lg:px-24 bg-gray-50 text-gray-800">

            <div class="max-w-4xl mx-auto space-y-10">

                <!-- Intro -->
                <p class="text-lg sm:text-xl leading-relaxed">
                    Technical friction is not just an inconvenience—it is a direct drain on your bottom line. We move beyond the reactive <span class="font-semibold">"help desk"</span> model to provide a <span class="font-semibold">Dedicated Systems Integration and Support Team</span> that acts as a seamless extension of your internal operations. We don't just fix problems; we engineer your technical health as a <span class="font-semibold">strategic driver of growth</span>.
                </p>

                <p class="text-lg sm:text-xl leading-relaxed">
                    Partnering with us transforms your IT and Customer Support infrastructure into a high-performance engine through:
                </p>

                <!-- Features List -->
                <ul class="list-disc pl-5 space-y-4 text-lg sm:text-xl leading-relaxed text-gray-700">
                    <li>
                        <strong>Proactive Infrastructure Management:</strong> We deploy sophisticated monitoring tools to identify and mitigate bottlenecks before they cause downtime. Your systems remain stable, secure, and optimized for high-velocity demands.
                    </li>
                    <li>
                        <strong>Integrated IT & Customer Support:</strong> We embed ourselves within your existing communication workflows (Slack, Microsoft Teams, etc.), ensuring zero-latency response times for both your internal team and your end customers.
                    </li>
                    <li>
                        <strong>Strategic Knowledge Transfer:</strong> We provide ongoing documentation and training, empowering your internal team to build resilience and master the technical stack we manage.
                    </li>
                    <li>
                        <strong>High-Availability Protocols:</strong> Whether it is routine configuration, software auditing, or high-pressure emergency interventions, our tiered support structure ensures your business operations never skip a beat.
                    </li>
                    <li>
                        <strong>Continuous Optimization:</strong> We rigorously eliminate technical debt, perform scheduled security patching, and refine automated workflows so your technology always supports—and never inhibits—your strategic objectives.
                    </li>
                </ul>

                <!-- Closing Statement -->
                <p class="text-lg sm:text-xl leading-relaxed">
                    We become the silent, reliable engine that keeps your business running at peak capacity, allowing your team to focus on core revenue-generating goals while we handle the complexity of your digital ecosystem.
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