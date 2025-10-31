@props(['currentRoute' => null])

<section class="py-4">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Desktop Menu -->
    <nav class="hidden items-center justify-between lg:flex">
      <div class="flex items-center gap-6">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex items-center gap-2">
          <img src="{{ asset('img/logo.svg') }}" alt="Pometlaw Logo" class="h-24 w-auto" loading="eager">
        </a>
        <div class="flex items-center">
          <div class="flex items-center gap-6">
            <a href="{{ route('home') }}"
              class="nav-link {{ request()->routeIs('home') ? 'active' : '' }} text-gray-75 hover:text-delft-blue transition-colors duration-200">
              Domů
            </a>
            <div class="relative group">
              <button
                class="nav-link text-gray-75 hover:text-delft-blue transition-colors duration-200 flex items-center gap-1">
                Školení
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
              </button>
              <div
                class="absolute top-full left-0 mt-2 w-80 bg-white border border-gray-20 rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                <div class="p-4">
                  <div class="space-y-3">
                    <a href="{{ route('events.index') }}"
                      class="flex items-start gap-3 p-3 rounded-lg hover:bg-gray-5 transition-colors">
                      <svg class="w-5 h-5 text-delft-blue mt-0.5" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                        </path>
                      </svg>
                      <div>
                        <div class="font-medium text-gray-75">Všechna školení</div>
                        <div class="text-sm text-gray-50">Prohlédněte si všechny dostupné kurzy</div>
                      </div>
                    </a>
                    <a href="{{ route('events.index') }}?category=zakazky"
                      class="flex items-start gap-3 p-3 rounded-lg hover:bg-gray-5 transition-colors">
                      <svg class="w-5 h-5 text-moonstone mt-0.5" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                        </path>
                      </svg>
                      <div>
                        <div class="font-medium text-gray-75">Veřejné zakázky</div>
                        <div class="text-sm text-gray-50">Specializované školení pro veřejné zakázky</div>
                      </div>
                    </a>
                    <a href="{{ route('events.index') }}?category=tendry"
                      class="flex items-start gap-3 p-3 rounded-lg hover:bg-gray-5 transition-colors">
                      <svg class="w-5 h-5 text-paynes-gray mt-0.5" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1">
                        </path>
                      </svg>
                      <div>
                        <div class="font-medium text-gray-75">Tenderové řízení</div>
                        <div class="text-sm text-gray-50">Komplexní příprava na tenderové procesy</div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <a href="{{ route('about') }}"
              class="nav-link {{ request()->routeIs('about') ? 'active' : '' }} text-gray-75 hover:text-delft-blue transition-colors duration-200">
              O nás
            </a>
            <a href="{{ route('contact') }}"
              class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }} text-gray-75 hover:text-delft-blue transition-colors duration-200">
              Kontakt
            </a>
          </div>
        </div>
      </div>
      <div class="flex gap-2">
        <x-button href="{{ route('contact') }}" variant="outline" size="sm">
          Kontaktovat nás
        </x-button>
        <x-button href="{{ route('events.index') }}" size="sm">
          Školení
        </x-button>
      </div>
    </nav>

    <!-- Mobile Menu -->
    <div class="block lg:hidden">
      <div class="flex items-center justify-between">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex items-center gap-2">
          <img src="{{ asset('img/logo.svg') }}" alt="Pometlaw Logo" class="h-8 w-auto" loading="eager">
        </a>
        <x-button variant="outline" size="icon" x-data="{ open: false }" @click="open = !open">
          <svg x-show="!open" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <svg x-show="open" x-cloak class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </x-button>
      </div>

      <!-- Mobile Navigation Menu -->
      <div x-show="open" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform -translate-y-2"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform -translate-y-2"
        class="mt-4 bg-white border border-gray-20 rounded-lg shadow-lg" x-cloak>
        <div class="p-4 space-y-4">
          <a href="{{ route('home') }}"
            class="nav-link {{ request()->routeIs('home') ? 'active' : '' }} block text-gray-75 hover:text-delft-blue transition-colors duration-200 font-medium">
            Domů
          </a>

          <!-- Mobile Školení Dropdown -->
          <div x-data="{ trainingsOpen: false }">
            <button @click="trainingsOpen = !trainingsOpen"
              class="flex items-center justify-between w-full text-gray-75 hover:text-delft-blue transition-colors duration-200 font-medium">
              Školení
              <svg class="w-4 h-4 transition-transform duration-200" :class="trainingsOpen ? 'rotate-180' : ''"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            <div x-show="trainingsOpen" x-transition class="mt-3 space-y-2 pl-4">
              <a href="{{ route('events.index') }}"
                class="flex items-center gap-3 p-2 rounded-lg hover:bg-gray-5 transition-colors">
                <svg class="w-4 h-4 text-delft-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                  </path>
                </svg>
                <span class="text-sm">Všechna školení</span>
              </a>
              <a href="{{ route('events.index') }}?category=zakazky"
                class="flex items-center gap-3 p-2 rounded-lg hover:bg-gray-5 transition-colors">
                <svg class="w-4 h-4 text-moonstone" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                  </path>
                </svg>
                <span class="text-sm">Veřejné zakázky</span>
              </a>
              <a href="{{ route('events.index') }}?category=tendry"
                class="flex items-center gap-3 p-2 rounded-lg hover:bg-gray-5 transition-colors">
                <svg class="w-4 h-4 text-paynes-gray" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1">
                  </path>
                </svg>
                <span class="text-sm">Tenderové řízení</span>
              </a>
            </div>
          </div>

          <a href="{{ route('about') }}"
            class="nav-link {{ request()->routeIs('about') ? 'active' : '' }} block text-gray-75 hover:text-delft-blue transition-colors duration-200 font-medium">
            O nás
          </a>
          <a href="{{ route('contact') }}"
            class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }} block text-gray-75 hover:text-delft-blue transition-colors duration-200 font-medium">
            Kontakt
          </a>

          <div class="flex flex-col gap-3 pt-4 border-t border-gray-20">
            <x-button href="{{ route('contact') }}" variant="outline" class="w-full">
              Kontaktovat nás
            </x-button>
            <x-button href="{{ route('events.index') }}" class="w-full">
              Školení
            </x-button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .nav-link.active {
    @apply text-delft-blue;
    position: relative;
  }

  .nav-link.active::after {
    content: '';
    position: absolute;
    bottom: -16px;
    left: 0;
    right: 0;
    height: 2px;
    background: var(--color-delft-blue);
    border-radius: 1px;
  }
</style>
