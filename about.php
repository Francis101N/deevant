<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us | Deevant</title>
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

    <section class="py-20 px-6 sm:px-12 lg:px-24">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold font-['Sacramento'] text-[#1f9d9c]">About us</h2>
            <div class="w-16 h-1 bg-[#1f9d9c] mx-auto mt-2 rounded-full"></div><br>
            <p>Our Company delivers innovative, scalable technology solutions from web and mobile development to automation and digital strategy that help businesses grow smarter, operate efficiently, and achieve lasting digital excellence.</p>
        </div>

        <div class="mt-10 max-w-5xl mx-auto">
            <iframe
                src="images/Deevant company profile (3).pdf"
                class="w-full h-[900px] rounded-xl shadow-lg"
                title="Company Profile">
            </iframe>
        </div>
        <br><br><br>
        <div class="mt-6 text-center">
            <a href="images/Deevant company profile (3).pdf" target="_blank"
                class="inline-block bg-[#1f9d9c] text-white px-6 py-3 rounded-lg shadow-md hover:bg-opacity-90 transition">
                View / Download Company Profile (PDF)
            </a>
        </div>
    </section>

    <section class="py-16 px-6 lg:px-24 bg-white">
        <div class="max-w-6xl mx-auto text-center">
            <h3 class="text-3xl font-bold font-['Sacramento'] text-[#1f9d9c] mb-5">Why Choose Us</h3><br>

            <div class="grid md:grid-cols-3 gap-8 text-gray-600">
                <div>
                    <h4 class="font-semibold text-lg mb-2">Innovation-Driven</h4>
                    <p>We leverage modern technologies to deliver forward-thinking solutions.</p>
                </div>

                <div>
                    <h4 class="font-semibold text-lg mb-2">Client-Focused</h4>
                    <p>Every project is tailored to meet unique business goals and challenges.</p>
                </div>

                <div>
                    <h4 class="font-semibold text-lg mb-2">Scalable Solutions</h4>
                    <p>Our systems are built to grow with your business.</p>
                </div>

                <div>
                    <h4 class="font-semibold text-lg mb-2">Reliable Support</h4>
                    <p>We provide continuous support to ensure smooth operations.</p>
                </div>

                <div>
                    <h4 class="font-semibold text-lg mb-2">Experienced Team</h4>
                    <p>A skilled team with expertise across multiple technology domains.</p>
                </div>

                <div>
                    <h4 class="font-semibold text-lg mb-2">Results-Oriented</h4>
                    <p>We focus on delivering measurable and impactful outcomes.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 px-6 lg:px-24 bg-[#1f9d9c] text-white text-center">
        <div class="max-w-3xl mx-auto">
            <h3 class="text-3xl font-['Sacramento'] mb-4">Let’s Build Something Great Together</h3>
            <p class="mb-6 text-lg">
                Ready to transform your business with innovative technology solutions? Get in touch with us today.
            </p>
            <a href="#contact" class="bg-white text-[#1f9d9c] px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                Contact Us
            </a>
        </div>
    </section>

    <section class="py-16 px-6 lg:px-24 bg-white">
        <div class="max-w-6xl mx-auto">
            <h3 class="text-3xl text-center mb-12 font-['Sacramento'] text-[#1f9d9c]">Our Process</h3>

            <div class="grid md:grid-cols-4 gap-8 text-center text-gray-600">
                <div>
                    <h4 class="font-semibold text-lg mb-2">1. Discovery</h4>
                    <p>Understanding your business, goals, and challenges.</p>
                </div>

                <div>
                    <h4 class="font-semibold text-lg mb-2">2. Strategy</h4>
                    <p>Designing tailored solutions aligned with your objectives.</p>
                </div>

                <div>
                    <h4 class="font-semibold text-lg mb-2">3. Development</h4>
                    <p>Building scalable and high-performance solutions.</p>
                </div>

                <div>
                    <h4 class="font-semibold text-lg mb-2">4. Deployment</h4>
                    <p>Launching, optimizing, and supporting your solution.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 px-6 lg:px-24">
        <div class="max-w-6xl mx-auto text-center">
            <h3 class="text-3xl font-bold mb-10 font-['Sacramento'] text-[#1f9d9c]">Industries We Serve</h3>

            <div class="grid md:grid-cols-3 gap-8 text-gray-700">

                <!-- Technology & Startups -->
                <div class="flex flex-col items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-[#1f9d9c]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L15 12l-5.25-5m-5.5 11a9 9 0 1111 0 9 9 0 01-11 0z" />
                    </svg>
                    <p class="font-semibold">Technology & Startups</p>
                </div>

                <!-- Oil & Gas -->
                <div class="flex flex-col items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-[#1f9d9c]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v18m9-9H3" />
                    </svg>
                    <p class="font-semibold">Oil & Gas</p>
                </div>

                <!-- Logistics & Transportation -->
                <div class="flex flex-col items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-[#1f9d9c]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h1l1 4h12l1-4h1m-1 0v4m-12-4v4m6-10v10" />
                    </svg>
                    <p class="font-semibold">Logistics & Transportation</p>
                </div>

                <!-- Hospitality & Hotels -->
                <div class="flex flex-col items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-[#1f9d9c]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v18m-9-9h18" />
                    </svg>
                    <p class="font-semibold">Hospitality & Hotels</p>
                </div>

                <!-- Healthcare & Medical Services -->
                <div class="flex flex-col items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-[#1f9d9c]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m-4-4h8" />
                    </svg>
                    <p class="font-semibold">Healthcare & Medical Services</p>
                </div>

                <!-- Corporate & Enterprise Businesses -->
                <div class="flex flex-col items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-[#1f9d9c]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6m0-10V5H9v2" />
                    </svg>
                    <p class="font-semibold">Corporate & Enterprise Businesses</p>
                </div>

            </div>
        </div>
    </section>
    <br><br><br>

    <section class="py-20 px-6 lg:px-24 bg-gray-50 text-white">
        <div class="max-w-6xl mx-auto grid md:grid-cols-4 gap-8 text-center">
            <div>
                <h3 class="text-4xl font-bold text-[#1f9d9c]">50+</h3>
                <p class="text-[#1f9d9c]">Projects Delivered</p>
            </div>

            <div>
                <h3 class="text-4xl font-bold text-[#1f9d9c]">30+</h3>
                <p class="text-[#1f9d9c]">Happy Clients</p>
            </div>

            <div>
                <h3 class="text-4xl font-bold text-[#1f9d9c]">5+</h3>
                <p class="text-[#1f9d9c]">Industries Served</p>
            </div>

            <div>
                <h3 class="text-4xl font-bold text-[#1f9d9c]">100%</h3>
                <p class="text-[#1f9d9c]">Client Satisfaction</p>
            </div>
        </div>
    </section>

    <br><br><br>


    <?php
    include('inc/footer.php');
    ?>

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