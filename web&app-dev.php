<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web & App Development | Deevant</title>
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

    <section>
        <section id="team" class="py-20 px-6 sm:px-12 lg:px-24 bg-gray-50">
            <!-- Section Heading -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold font-['Sacramento'] text-[#1f9d9c]">Web & Mobile App Development</h2>
                <div class="w-16 h-1 bg-[#1f9d9c] mx-auto mt-2 rounded-full"></div><br>
                <p>Building cutting-edge digital solutions that empower businesses and elevate user experiences. From sleek web platforms to responsive mobile applications, we transform ideas into interactive, scalable, and secure products.</p>
            </div>
            <br><br>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-8">

                <!-- Image 1 -->
                <div class="overflow-hidden rounded-xl shadow-lg transform transition-transform duration-300 hover:scale-105">
                    <img src="images/web&app2.jpeg" alt="Image 2" class="w-full h-100 object-cover">
                </div>

                <!-- Image 2 -->
                <div class="overflow-hidden rounded-xl shadow-lg transform transition-transform duration-300 hover:scale-105">
                    <img src="images/web&app3.jpeg" alt="Image 3" class="w-full h-100 object-cover">
                </div>

                <!-- Image 3 -->
                <div class="overflow-hidden rounded-xl shadow-lg transform transition-transform duration-300 hover:scale-105">
                    <img src="images/web&app4.jpeg" alt="Image 4" class="w-full h-100 object-cover">
                </div>

                <!-- Image 4 -->
                <div class="overflow-hidden rounded-xl shadow-lg transform transition-transform duration-300 hover:scale-105">
                    <img src="images/web&app5.jpeg" alt="Image 5" class="w-full h-100 object-cover">
                </div>
            </div><br><br><br>

            <section class="py-16 px-6 sm:px-12 lg:px-24 bg-gray-50">
                <!-- Section Heading -->
                <div class="text-center mb-10">
                    <h2 class="text-4xl sm:text-5xl font-bold text-[#1f9d9c]">Explore Our Web Solutions</h2>
                    <div class="w-20 h-1 bg-[#1f9d9c] mx-auto mt-4 rounded-full"></div>
                </div>

                <!-- Styled List -->
                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-gray-700 text-lg">
                    <li class="p-5 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 hover:translate-y-1">
                        <strong>Personal Websites:</strong> Showcase individual identity, portfolio, hobbies, or personal blog.
                    </li>
                    <li class="p-5 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 hover:translate-y-1">
                        <strong>Business/Corporate Websites:</strong> Promote a company or organization, showcase services, and provide contact info.
                    </li>
                    <li class="p-5 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 hover:translate-y-1">
                        <strong>E-commerce Websites:</strong> Sell products or services online with product catalogs, shopping carts, and payment gateways.
                    </li>
                    <li class="p-5 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 hover:translate-y-1">
                        <strong>Educational Websites:</strong> Share knowledge or provide learning resources, online courses, and student dashboards.
                    </li>
                    <li class="p-5 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 hover:translate-y-1">
                        <strong>Blog/News Websites:</strong> Share articles, news, opinions, or updates with categories, search, and comments.
                    </li>
                    <li class="p-5 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 hover:translate-y-1">
                        <strong>Portfolio Websites:</strong> Showcase work or projects for creatives or freelancers.
                    </li>
                    <li class="p-5 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 hover:translate-y-1">
                        <strong>Entertainment Websites:</strong> Engage users with media, streaming, gaming, or interactive content.
                    </li>
                    <li class="p-5 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 hover:translate-y-1">
                        <strong>Community/Forum Websites:</strong> Connect people around shared interests with discussion threads and messaging.
                    </li>
                    <li class="p-5 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 hover:translate-y-1">
                        <strong>Web Applications:</strong> Functional apps in the browser like Gmail, Trello, or SaaS dashboards.
                    </li>
                    <li class="p-5 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 hover:translate-y-1">
                        <strong>Nonprofit & Government Websites:</strong> Inform citizens, support causes, or collect donations.
                    </li>
                    <li class="p-5 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 hover:translate-y-1">
                        <strong>Landing Pages:</strong> Focused single-page campaigns for a product, service, or event.
                    </li>
                    <li class="p-5 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 hover:translate-y-1">
                        <strong>Membership Sites:</strong> Require login to access premium or exclusive content.
                    </li>
                    <li class="p-5 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 hover:translate-y-1">
                        <strong>Directory / Listing Sites:</strong> Like real estate, job boards, or marketplaces.
                    </li>
                </ul>
            </section>


        </section>

        <section class="py-6 px-6 sm:px-12 lg:px-24 bg-gray-50 text-gray-800">
            <div class="max-w-4xl mx-auto space-y-8">
                <p class="text-xl sm:text-2xl font-semibold text-[#1f9d9c]">
                    A generic online presence is no longer a strategy , it’s a liability. To remain competitive, your digital infrastructure must operate as a <strong>high-speed, high-security extension of your brand</strong>. We don’t just build websites and apps; we <strong>engineer bespoke digital ecosystems</strong> designed for <strong>maximum ROI and sustainable scalability</strong>.
                </p>

                <h3 class="text-2xl font-bold text-gray-900">Here’s how we deliver a distinct competitive advantage for your business:</h3>

                <ul class="space-y-6 list-disc list-inside text-gray-700 text-lg">
                    <li>
                        <strong>Precision Engineering:</strong> We replace generic “one-size-fits-all” templates with <strong>custom, high-availability architectures</strong>. Expect <strong>lightning-fast load times, robust security, and seamless performance</strong> across all devices—including legacy systems.
                    </li>
                    <li>
                        <strong>User-Centric Design:</strong> Our approach merges <strong>elegant aesthetics with frictionless functionality</strong>. We translate complex business requirements into <strong>intuitive interfaces</strong> that drive user engagement and optimize conversion rates.
                    </li>
                    <li>
                        <strong>Operational Autonomy:</strong> Empower your team with tools that let you <strong>take full control</strong> of your digital assets. Through <strong>modular CMS platforms, advanced analytics, and seamless API integrations</strong>, your infrastructure operates independently, without vendor lock-in.
                    </li>
                    <li>
                        <strong>Zero Technical Debt:</strong> By prioritizing <strong>computational efficiency and lean software design</strong>, we ensure your digital ecosystem <strong>scales effortlessly</strong> alongside your business objectives.
                    </li>
                </ul>

                <p class="text-lg sm:text-xl mt-6">
                    We deliver <strong>precision-engineered digital assets</strong> that minimize operational overhead while <strong>anchoring your global presence</strong>. Let’s schedule a brief discovery call to <strong>explore the specific technical requirements</strong> for your next project.
                </p>
            </div>
        </section>
        <br><br>



        <?php
        include('inc/footer.php');
        ?>

    </section>

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