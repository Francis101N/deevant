<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | Deevant</title>
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

    <!-- AOS Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

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

    /* in your <style> or Tailwind config */
    .opacity-0 {
        opacity: 0;
    }

    .opacity-100 {
        opacity: 1;
    }

    .transform {
        transform: translateY(0);
    }

    .translate-y-8 {
        transform: translateY(2rem);
    }

    .transition-all {
        transition: all 1s ease-out;
    }

    /* PRODUCTS SECTION */
    .products-section {
        padding: 20px 0;
    }

    /* BUTTON SCROLL AREA */
    .product-buttons-wrapper {
        overflow-x: auto;
        margin-bottom: 40px;
        scroll-behavior: smooth;
        padding-bottom: 5px;
        display: flex;
        justify-content: center;
        /* centers the buttons */
    }

    .product-buttons {
        display: flex;
        gap: 12px;
        width: max-content;
    }

    .product-buttons button {
        font-size: 12px;
    }

    /* remove scrollbar look */
    .product-buttons-wrapper::-webkit-scrollbar {
        height: 6px;
    }

    .product-buttons-wrapper::-webkit-scrollbar-thumb {
        background: #ccc;
        border-radius: 10px;
    }

    /* BUTTONS MODERN STYLE */
    .filter-btn {
        position: relative;
        padding: 12px 25px;
        border: none;
        background: #f1f1f1;
        border-radius: 35px;
        font-weight: 600;
        cursor: pointer;
        white-space: nowrap;
        transition: all 0.4s ease;
        overflow: hidden;
        z-index: 1;
    }

    /* Hover Animation */
    .filter-btn::before {
        content: '';
        position: absolute;
        top: 50%;
        left: -100%;
        width: 200%;
        height: 100%;
        background: linear-gradient(120deg, rgba(32, 157, 156, 0.3), rgba(32, 157, 156, 0.1), rgba(32, 157, 156, 0.3));
        transform: translateY(-50%) rotate(25deg);
        transition: all 0.5s ease;
        z-index: 0;
    }

    .filter-btn:hover::before {
        left: -20%;
    }

    .filter-btn:hover {
        color: #fff;
        transform: scale(1.05);
    }

    /* Active / Focus State */
    .filter-btn.active {
        background: #209d9c;
        color: #fff;
        box-shadow: 0 8px 20px rgba(32, 157, 156, 0.5);
        transform: scale(1.05);
    }

    /* Optional: click pulse animation */
    .filter-btn:active {
        transform: scale(0.98);
    }

    .filter-btn span {
        display: inline-block;
        transition: transform 0.3s ease;
    }

    .filter-btn:hover span {
        transform: translateY(-2px);
    }

    /* PROJECT GRID */

    .projects {
        display: none;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
        max-width: 1200px;
        margin: auto;
    }

    .projects.active {
        display: grid;
    }


    /* PROJECT CARD */

    .project-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        transition: 0.3s;
    }

    .project-card:hover {
        transform: translateY(-6px);
    }

    .project-card img {
        width: 100%;
        height: 300px;
        object-fit: cover;
    }

    .project-card h4 {
        padding: 15px;
        margin: 0;
        font-size: 18px;
    }

    .project-card p {
        padding: 0 15px 20px;
        color: #666;
        font-size: 14px;
    }

    /* RESPONSIVE */

    @media(max-width:768px) {

        .projects {
            grid-template-columns: 1fr;
        }

        .product-buttons {
            padding-left: 100%;
            margin-left: 100%;
        }

        .product-buttons-wrapper {
            margin-bottom: 20px;
        }

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
                <h2 class="text-3xl font-bold font-['Sacramento'] text-[#1f9d9c]">Our Products</h2>
                <div class="w-16 h-1 bg-[#1f9d9c] mx-auto mt-2 rounded-full"></div><br>
                <p>Showcasing the initiatives and solutions shaping innovation, driving collaboration, and delivering
                    real impact.</p>
            </div>
            <br><br>

            <section class="products-section">

                <div class="product-buttons-wrapper">
                    <div class="product-buttons">

                        <button class="filter-btn active" onclick="showProjects(1)">Web & Mobile Development</button>
                        <button class="filter-btn" onclick="showProjects(2)">Visual Design</button>
                        <button class="filter-btn" onclick="showProjects(3)">CCTV installation</button>
                        <button class="filter-btn" onclick="showProjects(4)">Advanced Automation</button>
                        <button class="filter-btn" onclick="showProjects(5)">Tailored Technology Workflows</button>

                    </div>
                </div>


                <div class="projects-container">

                    <!-- PRODUCT 1 -->
                    <div id="product1" class="projects active">

                        <div class="project-card">
                            <img src="images/Screenshot 2026-03-17 at 09.40.20.png">
                            <h4>BBR DOLCE VITA</h4>
                            <p>Developed a fully responsive website for BBR Dolce Vita, a luxury 4-day wellness retreat on the Italian Riviera. The platform features a seamless booking system for reservations, rooms, and activities, alongside a powerful admin dashboard for managing suites, bookings, and site content. Integrated automated email notifications to enhance user communication and streamline operations. This project demonstrates deevant ability to deliver efficient, user-focused, full-stack web solutions.
                            </p>
                            <a href="http://bbrdolcevita.net/" class="text-red-500 hover:text-red-600 font-medium p-4">
                                Click to view
                            </a>
                            <br><br>
                        </div>

                        <div class="project-card">
                            <img src="images/project2.jpg">
                            <h4>Payment Gateway</h4>
                            <p>Secure online payment processing solution.</p>
                            <a href="" class="text-red-500 hover:text-red-600 font-medium p-4">
                                Click to view
                            </a>
                            <br><br>
                        </div>

                    </div>


                    <!-- PRODUCT 2 -->
                    <div id="product2" class="projects">

                        <div class="project-card">
                            <img src="images/project3.jpg">
                            <h4>School Management System</h4>
                            <p>Complete digital academic management platform.</p>
                            <a href="" class="text-red-500 hover:text-red-600 font-medium p-4">
                                Click to view
                            </a>
                            <br><br>
                        </div>

                        <div class="project-card">
                            <img src="images/project4.jpg">
                            <h4>Hospital Portal</h4>
                            <p>Healthcare management system for clinics.</p>
                            <a href="" class="text-red-500 hover:text-red-600 font-medium p-4">
                                Click to view
                            </a>
                            <br><br>
                        </div>

                    </div>

                    <!-- PRODUCT 3 -->
                    <div id="product3" class="projects">

                        <div class="project-card">
                            <img src="images/project3.jpg">
                            <h4>School Management System</h4>
                            <p>Complete digital academic management platform.</p>
                            <a href="" class="text-red-500 hover:text-red-600 font-medium p-4">
                                Click to view
                            </a>
                            <br><br>
                        </div>

                        <div class="project-card">
                            <img src="images/project4.jpg">
                            <h4>Hospital Portal</h4>
                            <p>Healthcare management system for clinics.</p>
                            <a href="" class="text-red-500 hover:text-red-600 font-medium p-4">
                                Click to view
                            </a>
                            <br><br>
                        </div>

                    </div>

                    <!-- PRODUCT 4 -->
                    <div id="product4" class="projects">

                        <div class="project-card">
                            <img src="images/WhatsApp Image 2026-03-18 at 7.22.31 AM.jpeg">
                            <h4>Automated QR Attendance & Analytics Engine</h4>
                            <p>
                                This contactless attendance ecosystem is engineered to eliminate manual data entry errors and administrative bottlenecks within the Google Workspace environment. By deploying a QR-integrated ID system, the solution enables a cloud-based capture sequence upon entry that instantly synchronizes names, timestamps, and location data into a centralized Google Sheets master database.

                                The workflow transforms legacy paper processes into a high-integrity, real-time reporting tool, providing management with immediate operational visibility and a secure, audit-ready digital trail.

                                Technical Stack & Integration
                                Logic & Automation: Google Apps Script / Google Forms

                                Database Management: Google Sheets (Real-time Synchronization)

                                Hardware Integration: QR-enabled Mobile Scanning

                                UI/UX Design: Custom Identity Branding & Optimized Entry Forms</p>
                            <a href="https://www.linkedin.com/posts/amuzukofimawuena_googleworkspace-processautomation-hrtech-activity-7364591067561713665-JYOw?utm_source=share&utm_medium=member_desktop&rcm=ACoAADW9yuQBDENMCd9KE_L4l6XTHndyOEMODQs" class="text-red-500 hover:text-red-600 font-medium p-4">
                                Watch Video
                            </a>
                            <br><br>
                        </div>

                        <div class="project-card">
                            <img src="images/WhatsApp Image 2026-03-18 at 7.41.58 AM.jpeg">
                            <h4>Benevolence & Community Impact Management System</h4>
                            <p>This is an enterprise solution built on Microsoft 365 that digitizes how community aid and resources are managed. It replaces manual processes with a centralized, automated system.

                                Applicants submit requests through a secure SharePoint portal, administrators manage and approve them using a dashboard with automated workflows (Power Automate), and leadership gets real-time insights into resource usage and impact.

                                The system ensures:

                                Automation of approvals and processes

                                Centralized data management with SharePoint Lists

                                Real-time inventory tracking

                                Transparent, audit-ready records

                                Overall, it creates a streamlined, efficient, and accountable platform for managing assistance and resource distribution.</p>
                            <a href="https://www.linkedin.com/posts/amuzukofimawuena_churchtech-sharepoint-nonprofitmanagement-activity-7376279318731153408-K9ZU?utm_source=share&utm_medium=member_desktop&rcm=ACoAADW9yuQBDENMCd9KE_L4l6XTHndyOEMODQs" class="text-red-500 hover:text-red-600 font-medium p-4">
                                Watch Video
                            </a>
                            <br><br>
                        </div>
                        <div class="project-card">
                            <img src="images/WhatsApp Image 2026-03-18 at 7.54.19 AM.jpeg">
                            <h4>Precision-Engineered Outbound Logistics: A Logic-Driven Staff Clearance & Gate Pass Ecosystem.</h4>
                            <p>The Product Description
                                This automated enterprise solution digitizes personnel movement by replacing manual logs with a high-integrity Microsoft 365 workflow, utilizing Power Apps for seamless request submission and Power Automate for real-time, multi-stage departmental approvals. By centralizing exit data within SharePoint, the system provides management with an audit-ready digital trail and live operational insights, significantly reducing administrative overhead while fortifying facility security and accountability.

                                Technical Specifications
                                Engine: Power Automate (Multi-Stage Logic)

                                Interface: Mobile-Responsive Power Apps Portal

                                Data Layer: SharePoint List Integration

                                Security: Human-in-the-Loop Verification & Timestamped Auditing</p>
                            <a href="https://www.linkedin.com/posts/amuzukofimawuena_microsoft365-powerplatform-digitaltransformation-activity-7438258240653770752-ur4i?utm_source=share&utm_medium=member_desktop&rcm=ACoAADW9yuQBDENMCd9KE_L4l6XTHndyOEMODQs" class="text-red-500 hover:text-red-600 font-medium p-4">
                                Watch Video
                            </a>
                            <br><br>
                        </div>

                    </div>

                    <!-- PRODUCT 5 -->
                    <div id="product5" class="projects">

                        <div class="project-card">
                            <img src="images/project3.jpg">
                            <h4>School Management System</h4>
                            <p>Complete digital academic management platform.</p>
                            <a href="" class="text-red-500 hover:text-red-600 font-medium p-4">
                                Click to view
                            </a>
                            <br><br>
                        </div>

                        <div class="project-card">
                            <img src="images/project4.jpg">
                            <h4>Hospital Portal</h4>
                            <p>Healthcare management system for clinics.</p>
                            <a href="" class="text-red-500 hover:text-red-600 font-medium p-4">
                                Click to view
                            </a>
                            <br><br>
                        </div>

                    </div>

                </div>

            </section>

        </section>

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

    <?php
    include('inc/footer.php');
    ?>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true, // animate only once
            duration: 1000, // default animation duration
            offset: 100 // trigger animation 100px before element
        });
    </script>

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

    function showProjects(num) {

        var sections = document.querySelectorAll(".projects");
        var buttons = document.querySelectorAll(".filter-btn");

        sections.forEach(sec => {
            sec.classList.remove("active");
        });

        buttons.forEach(btn => {
            btn.classList.remove("active");
        });

        document.getElementById("product" + num).classList.add("active");
        buttons[num - 1].classList.add("active");

    }
</script>

</html>