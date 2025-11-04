<nav class="bg-white border-b border-gray-20 sticky top-0 z-50">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-delft-blue rounded flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <span class="text-xl font-bold text-gray-75">Pometlaw</span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="text-gray-75 font-medium">Domů</a>
                <a href="{{ route('events.index') }}" class="text-gray-75 font-medium">Kurzy</a>
                <a href="#about" class="text-gray-75 font-medium">O nás</a>
                <a href="{{ route('contact') }}" class="text-gray-75 font-medium">Kontakt</a>
            </div>

            <!-- CTA Button -->
            <div class="hidden md:flex items-center">
                <a href="{{ route('events.index') }}"
                   class="inline-flex items-center px-4 py-2 bg-delft-blue text-white font-medium rounded">
                    Naše školení
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button type="button"
                        class="text-gray-75 p-2 rounded"
                        onclick="toggleMobileMenu()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="hidden md:hidden pb-4">
            <div class="flex flex-col space-y-4">
                <a href="{{ route('home') }}" class="text-gray-75 font-medium py-2">Domů</a>
                <a href="{{ route('events.index') }}" class="text-gray-75 font-medium py-2">Kurzy</a>
                <a href="#about" class="text-gray-75 font-medium py-2">O nás</a>
                <a href="{{ route('contact') }}" class="text-gray-75 font-medium py-2">Kontakt</a>
                <a href="{{ route('events.index') }}"
                   class="inline-flex items-center px-4 py-2 bg-delft-blue text-white font-medium rounded w-fit">
                    Naše školení
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
function toggleMobileMenu() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
}
</script>