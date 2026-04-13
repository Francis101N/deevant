<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photography & Videography | Deevant</title>
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
                    Photography & Videography
                </h2>

                <div class="w-24 h-1 bg-gradient-to-r from-[#1f9d9c] to-teal-400 mx-auto mt-4 rounded-full"></div>

                <p class="mt-6 text-gray-600 text-lg sm:text-xl max-w-3xl mx-auto leading-relaxed">
                    We transform moments into <span class="font-semibold">powerful visual stories</span> through high-end photography and cinematic videography. From corporate productions and brand storytelling to events and industrial coverage, we capture visuals that are not just seen but felt, delivering content that elevates your brand identity and audience engagement.
                </p>
            </div>

            <!-- IMAGE GRID -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">

                <div class="group overflow-hidden rounded-2xl shadow-md">
                    <img src="images/Recruitment.jpeg" class="w-full h-[800px] object-cover transform group-hover:scale-110 transition duration-500 ease-in-out">
                </div>

                <div class="group overflow-hidden rounded-2xl shadow-md">
                    <img src="images/Recruitment2.jpeg" class="w-full h-[800px] object-cover transform group-hover:scale-110 transition duration-500 ease-in-out">
                </div>

                <div class="group overflow-hidden rounded-2xl shadow-md">
                    <img src="images/Recruitment3.jpeg" class="w-full h-[800px] object-cover transform group-hover:scale-110 transition duration-500 ease-in-out">
                </div>

                <div class="group overflow-hidden rounded-2xl shadow-md">
                    <img src="images/Recruitment4.jpeg" class="w-full h-[800px] object-cover transform group-hover:scale-110 transition duration-500 ease-in-out">
                </div>
            </div>
        </section>


        <!-- PHOTOGRAPHY & VIDEOGRAPHY SERVICES -->
        <section class="py-24 px-6 sm:px-12 lg:px-24 bg-white">

            <div class="text-center mb-16">
                <h2 class="text-4xl sm:text-5xl font-bold text-[#1f9d9c]">
                    Explore Our Photography & Videography Services
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-[#1f9d9c] to-teal-400 mx-auto mt-4 rounded-full"></div>
            </div>

            <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 text-gray-700">

                <li class="p-6 bg-gray-50 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300">
                    <strong>Cinematic Brand Storytelling:</strong> We craft visually compelling narratives that capture your brand identity through high-end photography and film production.
                </li>

                <li class="p-6 bg-gray-50 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300">
                    <strong>Corporate & Event Coverage:</strong> Professional coverage of corporate events, conferences, celebrations, and brand activations with a polished cinematic finish.
                </li>

                <li class="p-6 bg-gray-50 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300">
                    <strong>Commercial Photography:</strong> High-quality imagery for products, services, and marketing campaigns designed to elevate brand perception and engagement.
                </li>

                <li class="p-6 bg-gray-50 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300">
                    <strong>Drone & Aerial Cinematography:</strong> Stunning aerial visuals that add depth, scale, and cinematic perspective to your visual storytelling.
                </li>

                <li class="p-6 bg-gray-50 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300">
                    <strong>Post-Production Excellence:</strong> Expert editing, color grading, and visual refinement that ensure every frame delivers maximum impact.
                </li>

                <li class="p-6 bg-gray-50 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300">
                    <strong>Visual Identity Creation:</strong> We help brands build a consistent visual language that communicates professionalism, trust, and emotional connection.
                </li>

            </ul>
        </section>

        <!-- PREMIUM COPY -->
        <section class="py-24 px-6 sm:px-12 lg:px-24 bg-gray-50 text-gray-800">

            <div class="max-w-4xl mx-auto space-y-10">

                <!-- Intro -->
                <p class="text-lg sm:text-xl leading-relaxed">
                    Powerful visuals are the foundation of modern storytelling. We deliver a
                    <span class="font-semibold">cinematic photography and videography experience</span> designed to capture emotion, elevate perception, and bring your brand or event to life through compelling visual narratives.
                </p>

                <p class="text-lg sm:text-xl leading-relaxed">
                    Our creative process is built around precision, storytelling, and high-impact visual execution:
                </p>

                <!-- Features List -->
                <ul class="list-disc pl-5 space-y-4 text-lg sm:text-xl leading-relaxed text-gray-700">

                    <li>
                        <strong>Visual Story Crafting:</strong> We design each shoot with intentional storytelling, ensuring every frame communicates meaning, emotion, and purpose.
                    </li>

                    <li>
                        <strong>High-End Production Quality:</strong> Using professional-grade equipment and cinematic techniques to deliver sharp, polished, and visually striking content.
                    </li>

                    <li>
                        <strong>Event & Brand Coverage:</strong> From corporate functions to personal milestones, we capture moments with clarity, elegance, and authenticity.
                    </li>

                    <li>
                        <strong>Creative Direction & Composition:</strong> Every project is guided by strong visual planning, ensuring consistency, balance, and artistic excellence.
                    </li>

                    <li>
                        <strong>Post-Production Refinement:</strong> Expert editing and color grading that transform raw footage into immersive, high-impact visual content.
                    </li>

                </ul>

                <!-- Closing Statement -->
                <p class="text-lg sm:text-xl leading-relaxed">
                    The result is more than just visuals it is a powerful visual identity that connects emotionally, communicates clearly, and leaves a lasting impression.
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