  <header class="bg-white border-b border-gray-200 sticky top-0 z-50">
        <nav class="max-w-7xl mx-auto px-6">
            <div class="flex items-center justify-between h-16">

                <!-- Logo -->
                <a href="/" class="flex items-center">
                    <img src="images/deevant logo.jpeg" alt="Deevant" class="h-14 md:h-16 w-auto object-contain">
                </a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="./"
                        class="text-gray-700 hover:text-[color:var(--deevant-accent)] transition font-medium">
                        Home
                    </a>

                    <a href="index#services"
                        class="text-gray-700 hover:text-[color:var(--deevant-accent)] transition font-medium">
                        Our Services
                    </a>

                    <a href="#projects"
                        class="text-gray-700 hover:text-[color:var(--deevant-accent)] transition font-medium">
                        Projects
                    </a>

                    <a href="team"
                        class="text-gray-700 hover:text-[color:var(--deevant-accent)] transition font-medium">
                        Our Team
                    </a>

                    <a href="#contact" class="px-5 py-2 rounded-lg text-white font-medium
                  bg-[color:var(--deevant-primary)]
                  hover:bg-[color:var(--deevant-accent)]
                  transition">
                        Contact Us
                    </a>
                </div>

                <!-- Mobile Button -->
                <button id="menuBtn"
                    class="md:hidden p-2 rounded-lg text-gray-700 hover:bg-gray-100 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

            </div>

            <!-- Mobile Menu -->
            <div id="mobileMenu" class="hidden md:hidden pb-4 space-y-1">
                <a href="home" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded">Home</a>
                <a href="#services" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded">Our Services</a>
                <a href="#projects" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded">Projects</a>
                <a href="#team" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded">Our Team</a>

                <a href="#contact" class="block text-center mt-2 px-4 py-2 rounded-lg text-white
                bg-[color:var(--deevant-primary)]
                hover:bg-[color:var(--deevant-accent)]">
                    Contact Us
                </a>
            </div>

        </nav>
    </header>