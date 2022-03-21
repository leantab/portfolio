<header class="bg-gray-800">
    <div class="flex justify-between items-center mx-auto xl:max-w-7xl px-8">
        <div class="logo">
            <a href="/home" class="flex items-center space-x-2 h-6 py-2 text-lg text-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
                <span>Leandro Tabaj</span>
            </a>
        </div>

        <nav>
            <div class="hidden md:flex space-x-2 items-center text-gray-200">
                <a href="#" class="px-4 py-2 text-gray-200 hover:text-gray-900 hover:bg-gray-400">Home</a>
                <a href="#" class="px-4 py-2 text-gray-200 hover:text-gray-900 hover:bg-gray-400">About</a>
                <a href="#" class="px-4 py-2 text-gray-200 hover:text-gray-900 hover:bg-gray-400">Portfolio</a>
                <a href="#" class="px-4 py-2 text-gray-200 hover:text-gray-900 hover:bg-gray-400">Contact</a>
            </div>

            <!-- mobile button goes here -->
            <div class="md:hidden flex items-center">
                <button class="mobile-menu-button px-4 py-2 text-gray-200 hover:text-gray-900 hover:bg-gray-400">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </nav>
    </div>

    <div class="mobile-menu hidden md:hidden bg-gray-800">
        <a href="#" class="block py-2 px-4 text-sm text-gray-200 hover:bg-gray-200 hover:text-gray-800">Home</a>
        <a href="#" class="block py-2 px-4 text-sm text-gray-200 hover:bg-gray-200 hover:text-gray-800">About</a>
        <a href="#" class="block py-2 px-4 text-sm text-gray-200 hover:bg-gray-200 hover:text-gray-800">Portfolio</a>
        <a href="#" class="block py-2 px-4 text-sm text-gray-200 hover:bg-gray-200 hover:text-gray-800">Contact</a>
    </div>

</header>
