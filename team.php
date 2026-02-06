<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team | Deevant</title>
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
                            '0%': { transform: 'translateX(-100%)', opacity: '0' },
                            '100%': { transform: 'translateX(0)', opacity: '1' }
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
                <h2 class="text-3xl font-bold font-['Sacramento'] text-[#1f9d9c]">Meet The Team</h2>
                <div class="w-16 h-1 bg-[#1f9d9c] mx-auto mt-2 rounded-full"></div>
            </div>
            <br><br>

            <!-- Team Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-stretch">

                <!-- Team Member Card -->
                <div
                    class="bg-white p-6 rounded-xl shadow-lg transform transition duration-700 hover:scale-105 slide-in opacity-0 flex flex-col">

                    <!-- Content -->
                    <div class="flex-grow">
                        <!-- Image Wrapper -->
                        <div class="w-full h-64 flex items-center justify-center bg-gray-100 rounded-lg mb-4">
                            <img src="images/kofi-removebg-preview.png" alt="Mawuena Kofi Amuzu"
                                class="max-h-full max-w-full object-contain">
                        </div>

                        <h4 class="text-lg font-semibold mt-2 text-[#1f9d9c]">Mawuena Kofi Amuzu</h4>
                        <h5 class="text-sm text-gray-500 mb-4">Chief Innovation Officer</h5>

                        <p class="text-gray-600 text-sm">
                            The Chief Innovation Officer defines and drives the company’s innovation vision, uniting AI,
                            business systems automation, and digital design into a single strategic direction. This role
                            shapes how the company builds, scales, and differentiates overseeing intelligent technology,
                            brand identity, and product experiences to ensure long-term relevance, competitive
                            advantage, and sustainable growth.
                        </p>
                    </div>

                    <!-- Social Icons -->
                    <div class="flex gap-4 mt-6">
                        <!-- LinkedIn -->
                        <a href="#" class="text-[#1f9d9c] hover:scale-110 transition-transform w-6 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M4.98 3.5C4.98 4.88 3.88 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1s2.48 1.12 2.48 2.5zM.24 8h4.52V24H.24V8zm7.07 0h4.33v2.16h.06c.6-1.14 2.06-2.34 4.25-2.34 4.55 0 5.38 2.99 5.38 6.87V24h-4.54v-7.89c0-1.88-.03-4.3-2.62-4.3-2.63 0-3.03 2.05-3.03 4.16V24H7.31V8z" />
                            </svg>
                        </a>

                        <!-- Twitter -->
                        <a href="#" class="text-[#1f9d9c] hover:scale-110 transition-transform w-6 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 4.56c-.89.39-1.84.65-2.84.77a4.92 4.92 0 002.15-2.72 9.86 9.86 0 01-3.13 1.2 4.91 4.91 0 00-8.38 4.48A13.94 13.94 0 011.67 3.15 4.91 4.91 0 003.18 9.7a4.9 4.9 0 01-2.23-.62v.06a4.91 4.91 0 003.94 4.81 4.91 4.91 0 01-2.22.08 4.92 4.92 0 004.6 3.42 9.84 9.84 0 01-6.1 2.1c-.4 0-.79-.02-1.18-.07A13.91 13.91 0 007.56 21c9.05 0 14-7.5 14-14 0-.21 0-.42-.02-.63A10.03 10.03 0 0024 4.56z" />
                            </svg>
                        </a>

                        <!-- Facebook -->
                        <a href="#" class="text-[#1f9d9c] hover:scale-110 transition-transform w-6 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M22.675 0h-21.35C.595 0 0 .593 0 1.326v21.348C0 23.407.593 24 1.326 24h11.495v-9.294H9.691v-3.622h3.13V8.413c0-3.1 1.894-4.788 4.659-4.788 1.325 0 2.463.098 2.795.142v3.24l-1.918.001c-1.504 0-1.796.715-1.796 1.763v2.31h3.587l-.467 3.622h-3.12V24h6.116C23.407 24 24 23.407 24 22.674V1.326C24 .593 23.407 0 22.675 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div
                    class="bg-white p-6 rounded-xl shadow-lg transform transition duration-700 hover:scale-105 slide-in opacity-0 flex flex-col">

                    <!-- Content -->
                    <div class="flex-grow">
                        <!-- Image Wrapper -->
                        <div class="w-full h-64 flex items-center justify-center bg-gray-100 rounded-lg mb-4">
                            <img src="images/jerry-removebg-preview-removebg-preview.png" alt="Mawuena Kofi Amuzu"
                                class="max-h-full max-w-full object-contain">
                        </div>

                        <h4 class="text-lg font-semibold mt-2 text-[#1f9d9c]">Jerry Emmanuel</h4>
                        <h5 class="text-sm text-gray-500 mb-4">Chief Operations Officer</h5>

                        <p class="text-gray-600 text-sm">
                            The Chief Operations Officer oversees the company’s day-to-day operations, ensuring
                            processes, teams, and systems run efficiently and consistently. This role translates
                            strategy into execution, optimizes workflows, and drives operational discipline to support
                            scalability, performance, and sustainable growth across the organization.
                        </p>
                    </div>

                    <!-- Social Icons -->
                    <div class="flex gap-4 mt-6">
                        <!-- LinkedIn -->
                        <a href="#" class="text-[#1f9d9c] hover:scale-110 transition-transform w-6 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M4.98 3.5C4.98 4.88 3.88 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1s2.48 1.12 2.48 2.5zM.24 8h4.52V24H.24V8zm7.07 0h4.33v2.16h.06c.6-1.14 2.06-2.34 4.25-2.34 4.55 0 5.38 2.99 5.38 6.87V24h-4.54v-7.89c0-1.88-.03-4.3-2.62-4.3-2.63 0-3.03 2.05-3.03 4.16V24H7.31V8z" />
                            </svg>
                        </a>

                        <!-- Twitter -->
                        <a href="#" class="text-[#1f9d9c] hover:scale-110 transition-transform w-6 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 4.56c-.89.39-1.84.65-2.84.77a4.92 4.92 0 002.15-2.72 9.86 9.86 0 01-3.13 1.2 4.91 4.91 0 00-8.38 4.48A13.94 13.94 0 011.67 3.15 4.91 4.91 0 003.18 9.7a4.9 4.9 0 01-2.23-.62v.06a4.91 4.91 0 003.94 4.81 4.91 4.91 0 01-2.22.08 4.92 4.92 0 004.6 3.42 9.84 9.84 0 01-6.1 2.1c-.4 0-.79-.02-1.18-.07A13.91 13.91 0 007.56 21c9.05 0 14-7.5 14-14 0-.21 0-.42-.02-.63A10.03 10.03 0 0024 4.56z" />
                            </svg>
                        </a>

                        <!-- Facebook -->
                        <a href="#" class="text-[#1f9d9c] hover:scale-110 transition-transform w-6 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M22.675 0h-21.35C.595 0 0 .593 0 1.326v21.348C0 23.407.593 24 1.326 24h11.495v-9.294H9.691v-3.622h3.13V8.413c0-3.1 1.894-4.788 4.659-4.788 1.325 0 2.463.098 2.795.142v3.24l-1.918.001c-1.504 0-1.796.715-1.796 1.763v2.31h3.587l-.467 3.622h-3.12V24h6.116C23.407 24 24 23.407 24 22.674V1.326C24 .593 23.407 0 22.675 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div
                    class="bg-white p-6 rounded-xl shadow-lg transform transition duration-700 hover:scale-105 slide-in opacity-0 flex flex-col">

                    <!-- Content -->
                    <div class="flex-grow">
                        <!-- Image Wrapper -->
                        <div class="w-full h-64 flex items-center justify-center bg-gray-100 rounded-lg mb-4">
                            <img src="images/yemisi-removebg-preview.png" alt="Mawuena Kofi Amuzu"
                                class="max-h-full max-w-full object-contain">
                        </div>

                        <h4 class="text-lg font-semibold mt-2 text-[#1f9d9c]">Yemisi Ogunfeibo</h4>
                        <h5 class="text-sm text-gray-500 mb-4">Chief Digital officer</h5>

                        <p class="text-gray-600 text-sm">
                            The Chief Digital Officer leads the company’s digital vision and presence, overseeing
                            digital strategy, marketing, content, and online growth initiatives. This role ensures brand
                            consistency, audience engagement, and data-driven execution across all digital
                            channels positioning the company for sustained visibility, relevance, and impact in a
                            rapidly evolving digital landscape.
                        </p>
                    </div>

                    <!-- Social Icons -->
                    <div class="flex gap-4 mt-6">
                        <!-- LinkedIn -->
                        <a href="#" class="text-[#1f9d9c] hover:scale-110 transition-transform w-6 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M4.98 3.5C4.98 4.88 3.88 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1s2.48 1.12 2.48 2.5zM.24 8h4.52V24H.24V8zm7.07 0h4.33v2.16h.06c.6-1.14 2.06-2.34 4.25-2.34 4.55 0 5.38 2.99 5.38 6.87V24h-4.54v-7.89c0-1.88-.03-4.3-2.62-4.3-2.63 0-3.03 2.05-3.03 4.16V24H7.31V8z" />
                            </svg>
                        </a>

                        <!-- Twitter -->
                        <a href="#" class="text-[#1f9d9c] hover:scale-110 transition-transform w-6 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 4.56c-.89.39-1.84.65-2.84.77a4.92 4.92 0 002.15-2.72 9.86 9.86 0 01-3.13 1.2 4.91 4.91 0 00-8.38 4.48A13.94 13.94 0 011.67 3.15 4.91 4.91 0 003.18 9.7a4.9 4.9 0 01-2.23-.62v.06a4.91 4.91 0 003.94 4.81 4.91 4.91 0 01-2.22.08 4.92 4.92 0 004.6 3.42 9.84 9.84 0 01-6.1 2.1c-.4 0-.79-.02-1.18-.07A13.91 13.91 0 007.56 21c9.05 0 14-7.5 14-14 0-.21 0-.42-.02-.63A10.03 10.03 0 0024 4.56z" />
                            </svg>
                        </a>

                        <!-- Facebook -->
                        <a href="#" class="text-[#1f9d9c] hover:scale-110 transition-transform w-6 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M22.675 0h-21.35C.595 0 0 .593 0 1.326v21.348C0 23.407.593 24 1.326 24h11.495v-9.294H9.691v-3.622h3.13V8.413c0-3.1 1.894-4.788 4.659-4.788 1.325 0 2.463.098 2.795.142v3.24l-1.918.001c-1.504 0-1.796.715-1.796 1.763v2.31h3.587l-.467 3.622h-3.12V24h6.116C23.407 24 24 23.407 24 22.674V1.326C24 .593 23.407 0 22.675 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div
                    class="bg-white p-6 rounded-xl shadow-lg transform transition duration-700 hover:scale-105 slide-in opacity-0 flex flex-col">

                    <!-- Content -->
                    <div class="flex-grow">
                        <!-- Image Wrapper -->
                        <div class="w-full h-64 flex items-center justify-center bg-gray-100 rounded-lg mb-4">
                            <img src="images/francis-removebg-preview.png" alt="Mawuena Kofi Amuzu"
                                class="max-h-full max-w-full object-contain">
                        </div>

                        <h4 class="text-lg font-semibold mt-2 text-[#1f9d9c]">Francis Nwankwo</h4>
                        <h5 class="text-sm text-gray-500 mb-4">Chief Technology Officer</h5>

                        <p class="text-gray-600 text-sm">
                            The Chief Technology Officer defines and leads the company’s technology strategy, overseeing
                            secure web and application development, system architecture, and technical innovation. This
                            role ensures the reliability, scalability, and security of all digital products while
                            aligning technology decisions with long-term business objectives and growth.
                        </p>
                    </div>

                    <!-- Social Icons -->
                    <div class="flex gap-4 mt-6">
                        <!-- LinkedIn -->
                        <a href="#" class="text-[#1f9d9c] hover:scale-110 transition-transform w-6 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M4.98 3.5C4.98 4.88 3.88 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1s2.48 1.12 2.48 2.5zM.24 8h4.52V24H.24V8zm7.07 0h4.33v2.16h.06c.6-1.14 2.06-2.34 4.25-2.34 4.55 0 5.38 2.99 5.38 6.87V24h-4.54v-7.89c0-1.88-.03-4.3-2.62-4.3-2.63 0-3.03 2.05-3.03 4.16V24H7.31V8z" />
                            </svg>
                        </a>

                        <!-- Twitter -->
                        <a href="#" class="text-[#1f9d9c] hover:scale-110 transition-transform w-6 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 4.56c-.89.39-1.84.65-2.84.77a4.92 4.92 0 002.15-2.72 9.86 9.86 0 01-3.13 1.2 4.91 4.91 0 00-8.38 4.48A13.94 13.94 0 011.67 3.15 4.91 4.91 0 003.18 9.7a4.9 4.9 0 01-2.23-.62v.06a4.91 4.91 0 003.94 4.81 4.91 4.91 0 01-2.22.08 4.92 4.92 0 004.6 3.42 9.84 9.84 0 01-6.1 2.1c-.4 0-.79-.02-1.18-.07A13.91 13.91 0 007.56 21c9.05 0 14-7.5 14-14 0-.21 0-.42-.02-.63A10.03 10.03 0 0024 4.56z" />
                            </svg>
                        </a>

                        <!-- Facebook -->
                        <a href="#" class="text-[#1f9d9c] hover:scale-110 transition-transform w-6 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M22.675 0h-21.35C.595 0 0 .593 0 1.326v21.348C0 23.407.593 24 1.326 24h11.495v-9.294H9.691v-3.622h3.13V8.413c0-3.1 1.894-4.788 4.659-4.788 1.325 0 2.463.098 2.795.142v3.24l-1.918.001c-1.504 0-1.796.715-1.796 1.763v2.31h3.587l-.467 3.622h-3.12V24h6.116C23.407 24 24 23.407 24 22.674V1.326C24 .593 23.407 0 22.675 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div
                    class="bg-white p-6 rounded-xl shadow-lg transform transition duration-700 hover:scale-105 slide-in opacity-0 flex flex-col">

                    <!-- Content -->
                    <div class="flex-grow">
                        <!-- Image Wrapper -->
                        <div class="w-full h-64 flex items-center justify-center bg-gray-100 rounded-lg mb-4">
                            <img src="images/godspower-removebg-preview.png" alt="Mawuena Kofi Amuzu"
                                class="max-h-full max-w-full object-contain">
                        </div>

                        <h4 class="text-lg font-semibold mt-2 text-[#1f9d9c]">Godspower Igbadumeh Esq</h4>
                        <h5 class="text-sm text-gray-500 mb-4">Chief Legal Officer</h5>

                        <p class="text-gray-600 text-sm">
                            Our Legal Officer provides essential oversight by delivering comprehensive legal services
                            and meticulous document review to ensure organizational integrity. He is responsible for
                            managing all statutory filings, maintaining strict compliance with regulatory requirements,
                            and safeguarding the company through expert contract management and legal advisory.
                        </p>
                    </div>

                    <!-- Social Icons -->
                    <div class="flex gap-4 mt-6">
                        <!-- LinkedIn -->
                        <a href="#" class="text-[#1f9d9c] hover:scale-110 transition-transform w-6 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M4.98 3.5C4.98 4.88 3.88 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1s2.48 1.12 2.48 2.5zM.24 8h4.52V24H.24V8zm7.07 0h4.33v2.16h.06c.6-1.14 2.06-2.34 4.25-2.34 4.55 0 5.38 2.99 5.38 6.87V24h-4.54v-7.89c0-1.88-.03-4.3-2.62-4.3-2.63 0-3.03 2.05-3.03 4.16V24H7.31V8z" />
                            </svg>
                        </a>

                        <!-- Twitter -->
                        <a href="#" class="text-[#1f9d9c] hover:scale-110 transition-transform w-6 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 4.56c-.89.39-1.84.65-2.84.77a4.92 4.92 0 002.15-2.72 9.86 9.86 0 01-3.13 1.2 4.91 4.91 0 00-8.38 4.48A13.94 13.94 0 011.67 3.15 4.91 4.91 0 003.18 9.7a4.9 4.9 0 01-2.23-.62v.06a4.91 4.91 0 003.94 4.81 4.91 4.91 0 01-2.22.08 4.92 4.92 0 004.6 3.42 9.84 9.84 0 01-6.1 2.1c-.4 0-.79-.02-1.18-.07A13.91 13.91 0 007.56 21c9.05 0 14-7.5 14-14 0-.21 0-.42-.02-.63A10.03 10.03 0 0024 4.56z" />
                            </svg>
                        </a>

                        <!-- Facebook -->
                        <a href="#" class="text-[#1f9d9c] hover:scale-110 transition-transform w-6 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M22.675 0h-21.35C.595 0 0 .593 0 1.326v21.348C0 23.407.593 24 1.326 24h11.495v-9.294H9.691v-3.622h3.13V8.413c0-3.1 1.894-4.788 4.659-4.788 1.325 0 2.463.098 2.795.142v3.24l-1.918.001c-1.504 0-1.796.715-1.796 1.763v2.31h3.587l-.467 3.622h-3.12V24h6.116C23.407 24 24 23.407 24 22.674V1.326C24 .593 23.407 0 22.675 0z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Duplicate same structure for all team members -->

            </div>
        </section>

        <section class="min-h-screen flex items-center justify-center bg-gray-50 px-6">
            <div id="applyCard" class="max-w-xl w-full bg-white rounded-2xl p-10 shadow-xl
           opacity-0 scale-95 translate-y-6
           transition-all duration-700 ease-out">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-normal text-[#1f9d9c] font-['Sacramento']">
                        Meet The Team
                    </h2>
                    <div class="w-16 h-1 bg-[#1f9d9c] mx-auto mt-2 rounded-full"></div>
                </div>

                <p class="text-gray-600 leading-relaxed mb-6 text-center">
                    This is a paragraph. Click on "Edit Text" or double click on the text box
                    to start editing the content.
                </p>

                <div class="space-y-2 text-center">
                    <a href="mailto:info@mysite.com"
                        class="block text-gray-900 hover:text-blue-600 transition transform hover:translate-x-1">
                        info@mysite.com
                    </a>

                    <span class="block text-gray-900">
                        123-456-7890
                    </span>
                </div>
            </div>
        </section>

        <?php
        include('inc/footer.php');
        ?>


        <script>
            // Slide-in animation
            const teamCards = document.querySelectorAll('.slide-in');
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('opacity-100', 'translate-y-0');
                        entry.target.classList.remove('opacity-0', 'translate-y-12');
                    }
                });
            }, { threshold: 0.2 });
            teamCards.forEach(card => observer.observe(card));

            const card = document.getElementById("applyCard");

            const observerr = new IntersectionObserver(
                ([entry]) => {
                    if (entry.isIntersecting) {
                        card.classList.remove("opacity-0", "scale-95", "translate-y-6");
                        observerr.disconnect();
                    }
                },
                { threshold: 0.3 }
            );

            observerr.observe(card);


            document.addEventListener("DOMContentLoaded", () => {
                const footer = document.querySelector(".reveal-footer");

                const observerrr = new IntersectionObserver(entries => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            footer.classList.remove("opacity-0", "translate-y-12");
                            observerrr.unobserve(footer);
                        }
                    });
                }, { threshold: 0.3 });

                observerrr.observe(footer);
            });
        </script>


    </section>

</body>

</html>