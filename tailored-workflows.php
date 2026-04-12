<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailored Workflows | Deevant</title>
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

        <!-- TAILORED WORKFLOWS SECTION -->
        <section id="team" class="py-24 px-6 sm:px-12 lg:px-24">

            <!-- Heading -->
            <div class="text-center mb-16 max-w-3xl mx-auto px-4">
                <h2 class="text-3xl sm:text-4xl font-bold font-['Sacramento'] text-[#1f9d9c] inline-block">
                    Tailored Intelligent Workflows
                </h2>

                <div class="w-24 h-1 bg-gradient-to-r from-[#1f9d9c] to-teal-400 mx-auto mt-4 rounded-full"></div>

                <p class="mt-6 text-gray-600 text-lg sm:text-xl max-w-3xl mx-auto leading-relaxed">
                    Your business is unique your workflows should be too. We design and deploy bespoke automation systems that eliminate repetitive processes, streamline operations, and transform your infrastructure into a high-efficiency, intelligent ecosystem built for scale.
                </p>
            </div>

            <!-- IMAGE GRID -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">

                <div class="group overflow-hidden rounded-2xl shadow-md">
                    <img src="images/tailored-workflows.jpeg" class="w-full h-[800px] object-cover transform group-hover:scale-110 transition duration-500 ease-in-out">
                </div>

                <div class="group overflow-hidden rounded-2xl shadow-md">
                    <img src="images/tailored-workflows2.jpeg" class="w-full h-[800px] object-cover transform group-hover:scale-110 transition duration-500 ease-in-out">
                </div>

                <div class="group overflow-hidden rounded-2xl shadow-md">
                    <img src="images/tailored-workflows3.jpeg" class="w-full h-[800px] object-cover transform group-hover:scale-110 transition duration-500 ease-in-out">
                </div>

                <div class="group overflow-hidden rounded-2xl shadow-md">
                    <img src="images/tailored-workflows4.jpeg" class="w-full h-[800px] object-cover transform group-hover:scale-110 transition duration-500 ease-in-out">
                </div>

            </div>

        </section>


        <!-- INTELLIGENT WORKFLOW ARCHITECTURE -->
        <section class="py-24 px-6 sm:px-12 lg:px-24 bg-white">

            <div class="text-center mb-16">
                <h2 class="text-4xl sm:text-5xl font-bold text-[#1f9d9c]">
                    Precision-Engineered Workflows for Scalable Operations
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-[#1f9d9c] to-teal-400 mx-auto mt-4 rounded-full"></div>
            </div>

            <p class="text-center max-w-4xl mx-auto text-gray-600 mb-16 leading-relaxed text-lg">
                Fragmented, manual processes are one of the most significant hidden costs in growing businesses.
                We go beyond traditional software solutions to design <span class="font-semibold">precision-engineered workflows</span> that connect strategy to execution eliminating bottlenecks, reducing administrative drag, and enabling teams to operate at high velocity.
            </p>

            <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 text-gray-700">

                <li class="p-6 bg-gray-50 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300">
                    <strong>Unified Digital Ecosystems:</strong> We integrate CRM, ERP, and operational tools into a single source of truth, ensuring seamless data flow and eliminating manual duplication across departments.
                </li>

                <li class="p-6 bg-gray-50 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300">
                    <strong>Smart Approval Automation:</strong> Conditional logic-driven workflows route tasks dynamically, allowing high-priority decisions to move instantly while reducing delays caused by manual approvals.
                </li>

                <li class="p-6 bg-gray-50 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300">
                    <strong>Frictionless User Experience Design:</strong> We simplify complex operational systems into intuitive, low-friction interfaces that require minimal training while maximizing team efficiency and adoption.
                </li>

                <li class="p-6 bg-gray-50 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300">
                    <strong>Real-Time Process Intelligence:</strong> Embedded analytics provide continuous visibility into workflow performance, allowing leadership to identify inefficiencies and eliminate bottlenecks instantly.
                </li>

                <li class="p-6 bg-gray-50 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300">
                    <strong>Modular Scalability Architecture:</strong> Flexible system design ensures your workflows evolve seamlessly with business growth, market shifts, and operational expansion—without requiring full rebuilds.
                </li>

                <li class="p-6 bg-gray-50 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300">
                    <strong>Invisible Operational Infrastructure:</strong> We engineer the underlying systems that keep your business running smoothly—secure, consistent, and optimized for performance at all times.
                </li>

            </ul>

            <div class="text-center mt-16 max-w-3xl mx-auto">
                <p class="text-gray-600 text-lg mb-6">
                    We eliminate the hidden friction that slows your business, reclaiming lost productivity and transforming operations into a structured, high-performance system.
                </p>

                <p class="text-[#1f9d9c] font-semibold text-lg">
                    Let’s audit your current workflows and identify the friction points we can systematically eliminate.
                </p>
            </div>

        </section>

        <!-- PREMIUM TAILORED INTELLIGENT WORKFLOWS COPY -->
        <section class="py-24 px-6 sm:px-12 lg:px-24 bg-gray-50 text-gray-800">

            <div class="max-w-4xl mx-auto space-y-10">

                <!-- Intro -->
                <p class="text-lg sm:text-xl leading-relaxed">
                    No two businesses operate the same way yet most systems force them into rigid, standardized processes.
                    We design <span class="font-semibold">Tailored Intelligent Workflows</span> that are engineered specifically around your operational structure, team dynamics, and growth objectives.
                </p>

                <p class="text-lg sm:text-xl leading-relaxed">
                    Instead of forcing adaptation to software, we build adaptive systems that conform to your business eliminating friction, streamlining execution, and turning your daily operations into a precision aligned digital workflow ecosystem.
                </p>

                <!-- Features List -->
                <ul class="list-disc pl-5 space-y-4 text-lg sm:text-xl leading-relaxed text-gray-700">

                    <li>
                        <strong>Custom Workflow Architecture:</strong> We design workflows based on your exact business model, ensuring every process from lead handling to internal operations fits your structure with zero unnecessary complexity.
                    </li>

                    <li>
                        <strong>Business-Aligned Automation Logic:</strong> Automation rules are tailored to your decision pathways, ensuring tasks, approvals, and triggers reflect how your business actually operates not generic templates.
                    </li>

                    <li>
                        <strong>Integrated System Mapping:</strong> We connect your tools into a unified operational flow, ensuring data moves seamlessly between departments without duplication, delay, or manual intervention.
                    </li>

                    <li>
                        <strong>Adaptive Process Design:</strong> Your workflows are built to evolve. As your business scales or shifts direction, your systems adapt without requiring complete restructuring or downtime.
                    </li>

                    <li>
                        <strong>Performance-Driven Optimization:</strong> We continuously refine your workflows using real operational data, improving speed, accuracy, and efficiency over time.
                    </li>

                </ul>

                <!-- Closing Statement -->
                <p class="text-lg sm:text-xl leading-relaxed">
                    The result is a fully customized operational system that mirrors your business DNA removing friction, increasing speed, and enabling your team to execute with clarity and precision at every level.
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