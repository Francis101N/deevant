<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visual Design | Deevant</title>
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

        <!-- VISUAL DESIGN SECTION -->
        <section id="team" class="py-24 px-6 sm:px-12 lg:px-24">

            <!-- Heading -->
            <div class="text-center mb-16 max-w-3xl mx-auto">
                <h2 class="text-3xl sm:text-3xl font-bold font-['Sacramento'] text-[#1f9d9c]">
                    Visual Design & Brand Identity
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-[#1f9d9c] to-teal-400 mx-auto mt-4 rounded-full"></div>

                <p class="mt-6 text-gray-600 text-lg leading-relaxed">
                    We craft visually compelling experiences that communicate your brand with clarity and impact.
                    From brand identity to digital assets, we transform ideas into
                    <span class="font-semibold text-gray-800">powerful, memorable visual narratives.</span>
                </p>
            </div>

            <!-- IMAGE GRID -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">

                <div class="group overflow-hidden rounded-2xl shadow-md">
                    <img src="images/visual.jpeg" class="w-full h-[800px] object-cover transform group-hover:scale-110 transition duration-500 ease-in-out">
                </div>

                <div class="group overflow-hidden rounded-2xl shadow-md">
                    <img src="images/visual2.jpeg" class="w-full h-[800px] object-cover transform group-hover:scale-110 transition duration-500 ease-in-out">
                </div>

                <div class="group overflow-hidden rounded-2xl shadow-md">
                    <img src="images/visual3.jpeg" class="w-full h-[800px] object-cover transform group-hover:scale-110 transition duration-500 ease-in-out">
                </div>

                <div class="group overflow-hidden rounded-2xl shadow-md">
                    <img src="images/visual4.jpeg" class="w-full h-[800px] object-cover transform group-hover:scale-110 transition duration-500 ease-in-out">
                </div>

                <div class="group overflow-hidden rounded-2xl shadow-md">
                    <img src="images/visual5.jpeg" class="w-full h-[800px] object-cover transform group-hover:scale-110 transition duration-500 ease-in-out">
                </div>
                <div class="group overflow-hidden rounded-2xl shadow-md">
                    <img src="images/visual6.jpeg" class="w-full h-[800px] object-cover transform group-hover:scale-110 transition duration-500 ease-in-out">
                </div>

            </div>
        </section>


        <!-- SERVICES LIST -->
        <section class="py-24 px-6 sm:px-12 lg:px-24 bg-white">

            <div class="text-center mb-16">
                <h2 class="text-4xl sm:text-5xl font-bold text-[#1f9d9c]">
                    Explore Our Visual Design Solutions
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-[#1f9d9c] to-teal-400 mx-auto mt-4 rounded-full"></div>
            </div>

            <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 text-gray-700">

                <li class="p-6 bg-gray-50 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300">
                    <strong>Brand Identity Design:</strong> Logos, color systems, and visual guidelines that define your brand presence.
                </li>

                <li class="p-6 bg-gray-50 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300">
                    <strong>UI/UX Design:</strong> Elegant interfaces designed for usability, engagement, and seamless interaction.
                </li>

                <li class="p-6 bg-gray-50 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300">
                    <strong>Marketing & Ad Creatives:</strong> High-converting visuals for social media, campaigns, and digital ads.
                </li>

                <li class="p-6 bg-gray-50 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300">
                    <strong>Corporate Design Materials:</strong> Professional brochures, presentations, and company profiles.
                </li>

                <li class="p-6 bg-gray-50 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300">
                    <strong>Product & Packaging Design:</strong> Visually striking packaging that enhances brand perception.
                </li>

                <li class="p-6 bg-gray-50 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300">
                    <strong>Motion Graphics:</strong> Engaging animations and visuals that bring your brand to life.
                </li>

            </ul>
        </section>


        <!-- PREMIUM COPY -->
        <section class="py-24 px-6 sm:px-12 lg:px-24 bg-gray-50 text-gray-800">

            <div class="max-w-4xl mx-auto space-y-10">

                <p class="text-2xl font-semibold leading-relaxed">
                    In today’s competitive landscape, weak design is a liability. Your visual identity must function as a
                    <span class="font-bold">strategic asset that communicates authority, trust, and clarity.</span>
                </p>

                <div class="space-y-6 text-lg">
                    <p><strong>Strategic Creativity:</strong> Every design decision is driven by purpose, positioning, and brand alignment.</p>
                    <p><strong>Visual Consistency:</strong> Cohesive design systems that strengthen recognition across all platforms.</p>
                    <p><strong>Audience-Centered Design:</strong> We create visuals that resonate deeply with your target audience.</p>
                    <p><strong>Scalable Design Systems:</strong> Flexible assets that evolve with your brand as it grows.</p>
                </div>

                <p class="text-xl font-medium">
                    We design visual experiences that don’t just look good they communicate, convert, and leave lasting impressions.
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