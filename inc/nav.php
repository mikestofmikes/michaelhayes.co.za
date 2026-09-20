   <nav class="fixed w-full bg-white/40  backdrop-blur-md shadow-lg z-50 p-3">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">

                <a href="/" class="flex items-center space-x-2">
                    <img src="/img/logo.png" alt="Michael Hayes"  /><span class="hidden inline-block">Michael</span>
                </a>
                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-4 text-center">
                    <a href="/#about" class="text-gray-700 hover:text-red-600 mr-0">About</a>
                    <a href="/#experience" class="text-gray-700 hover:text-red-600">Experience</a>
                    <a href="/#work" class="text-gray-700 hover:text-red-600">Work</a>
                    <a href="/#skills" class="text-gray-700 hover:text-red-600">Skills</a>
                    <a href="/articles/index.php" class="text-gray-700 hover:text-red-600">Articles</a>
                    <a href="/#contact" class="text-gray-700 hover:text-red-600">Contact</a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            
            <!-- Mobile Menu -->
            <div x-show="mobileMenuOpen" x-transition class="md:hidden pb-4">
                <a href="/#about" @click="mobileMenuOpen = false" class="block py-2 text-gray-700 hover:text-purple-600">About</a>
                <a href="/#experience" @click="mobileMenuOpen = false" class="block py-2 text-gray-700 hover:text-purple-600">Experience</a>
                <a href="/#work" @click="mobileMenuOpen = false" class="block py-2 text-gray-700 hover:text-purple-600">Work</a>
                <a href="/#skills" @click="mobileMenuOpen = false" class="block py-2 text-gray-700 hover:text-purple-600">Skills</a>
                <a href="/articles/index.php" class="text-gray-700 hover:text-red-600">Articles</a>
                <a href="/#contact" @click="mobileMenuOpen = false" class="block py-2 text-gray-700 hover:text-purple-600">Contact</a>
            </div>
        </div>
    </nav>