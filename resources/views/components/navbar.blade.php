@props(['theme' => 'bg-white', 'mode' => 'dark', 'eventsCount' => 0])

<nav class="{{ $theme }} py-4 relative z-50" x-data="{ mobileNavOpen: false }">
  <div class="container mx-auto px-4">
    <div class="relative flex items-center justify-between">
      <a class="inline-block" href="{{ route('home') }}">
        <img class="h-8 w-auto" src="{{ $mode === 'dark' ? asset('img/logo.svg') : asset('img/logo-bile.svg') }}" alt="Pometlaw Logo"/>
      </a>
      <ul class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 hidden md:flex">
        <li class="mr-8"><a class="inline-block {{ $theme === 'bg-transparent' ? 'text-white hover:text-moonstone' : 'text-gray-75 hover:text-delft-blue' }} font-medium transition-colors" href="{{ route('home') }}">Úvod</a></li>
        <li class="mr-8">
          <a class="inline-flex items-center {{ $theme === 'bg-transparent' ? 'text-white hover:text-moonstone' : 'text-gray-75 hover:text-delft-blue' }} font-medium transition-colors" href="{{ route('events.index') }}">
            Kurzy
            <span class="ml-2 inline-flex items-center justify-center rounded-full text-xs px-2 py-0.5 {{ $theme === 'bg-transparent' ? 'bg-white/20 text-white' : 'bg-gray-10 text-gray-75' }}">
              {{ $eventsCount }}
            </span>
          </a>
        </li>
        <li class="mr-8"><a class="inline-block {{ $theme === 'bg-transparent' ? 'text-white hover:text-moonstone' : 'text-gray-75 hover:text-delft-blue' }} font-medium transition-colors" href="{{ route('articles.index') }}">Aktuality</a></li>
        <li class="mr-8"><a class="inline-block {{ $theme === 'bg-transparent' ? 'text-white hover:text-moonstone' : 'text-gray-75 hover:text-delft-blue' }} font-medium transition-colors" href="{{ route('about') }}">O nás</a></li>
        <li class="mr-8"><a class="inline-block {{ $theme === 'bg-transparent' ? 'text-white hover:text-moonstone' : 'text-gray-75 hover:text-delft-blue' }} font-medium transition-colors" href="#services">Služby</a></li>
        <li class="mr-8"><a class="inline-block {{ $theme === 'bg-transparent' ? 'text-white hover:text-moonstone' : 'text-gray-75 hover:text-delft-blue' }} font-medium transition-colors" href="{{ route('contact') }}">Kontakt</a></li>
      </ul>
      <div class="flex items-center justify-end">
        <div class="hidden md:block">
          <a href="{{ route('contact') }}">
          <x-ui.button-outline class="hover:cursor-pointer {{ $theme === 'bg-transparent' ? 'text-white border-white hover:bg-white hover:text-delft-blue' : 'text-delft-blue border-delft-blue hover:bg-delft-blue hover:text-white' }}">
            Kontaktujte nás
          </x-ui.button-outline>
        </a>
        </div>
        <button class="md:hidden {{ $theme === 'bg-transparent' ? 'text-white hover:text-moonstone' : 'text-gray-75 hover:text-delft-blue' }}" x-on:click="mobileNavOpen = !mobileNavOpen">
          <svg width="32" height="32" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5.19995 23.2H26.7999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M5.19995 16H26.7999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M5.19995 8.79999H26.7999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div class="hidden fixed top-0 left-0 bottom-0 w-full xs:w-5/6 xs:max-w-md z-50" :class="{'block': mobileNavOpen, 'hidden': !mobileNavOpen}">
    <div class="fixed inset-0 bg-delft-blue opacity-20" x-on:click="mobileNavOpen = !mobileNavOpen"></div>
    <nav class="relative flex flex-col py-7 px-10 w-full h-full bg-white overflow-y-auto">
      <div class="flex items-center justify-between">
        <a class="inline-block" href="{{ route('home') }}">
          <img class="h-8" src="{{ asset('/img/logo.svg') }}" alt="Pometlaw Logo"/>
        </a>
        <div class="flex items-center">
          <x-ui.button-outline href="{{ route('contact') }}" class="mr-6 text-delft-blue border-delft-blue hover:bg-delft-blue hover:text-white">
            Kontakt
          </x-ui.button-outline>
          <button x-on:click="mobileNavOpen = !mobileNavOpen">
            <svg class="text-gray-75" width="32" height="32" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M23.2 8.79999L8.80005 23.2M8.80005 8.79999L23.2 23.2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </button>
        </div>
      </div>
      <div class="pt-20 pb-12 mb-auto">
        <ul class="flex-col">
          <li class="mb-6">
            <a class="inline-flex items-center text-delft-blue hover:text-moonstone font-medium transition-colors" href="{{ route('events.index') }}">
              Školení
              <span class="ml-2 inline-flex items-center justify-center rounded-full text-xs px-2 py-0.5 bg-gray-10 text-gray-75">
                {{ $eventsCount }}
              </span>
            </a>
          </li>
          <li class="mb-6"><a class="inline-block text-delft-blue hover:text-moonstone font-medium transition-colors" href="{{ route('articles.index') }}">Aktuality</a></li>
          <li class="mb-6"><a class="inline-block text-delft-blue hover:text-moonstone font-medium transition-colors" href="#about">O nás</a></li>
          <li class="mb-6"><a class="inline-block text-delft-blue hover:text-moonstone font-medium transition-colors" href="{{ route('contact') }}">Kontakt</a></li>
          <li><a class="inline-block text-delft-blue hover:text-moonstone font-medium transition-colors" href="#services">Služby</a></li>
        </ul>
      </div>
      <div class="flex items-center justify-between">
        <a class="inline-flex items-center text-lg font-medium text-delft-blue" href="{{ route('contact') }}">
          <span>
            <svg width="32" height="32" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M6.4 6.39999H25.6C26.92 6.39999 28 7.47999 28 8.79999V23.2C28 24.52 26.92 25.6 25.6 25.6H6.4C5.08 25.6 4 24.52 4 23.2V8.79999C4 7.47999 5.08 6.39999 6.4 6.39999Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M28 8.8L16 17.2L4 8.8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </span>
          <span class="ml-2">Kontaktujte nás</span>
        </a>
      </div>
    </nav>
  </div>
</nav>
