@props(['variant' => 'transparent'])

@php
  $headerClasses = match ($variant) {
      'white' => 'bg-white border-b border-paynes-gray/20',
      default => 'bg-white border-b border-paynes-gray/20',
  };
@endphp

<header class="fixed top-0 left-0 right-0 z-50 {{ $headerClasses }}">
  <div class="max-container">
    <div class="flex items-center justify-between h-16 lg:h-20">
      <!-- Logo -->
      <div class="shrink-0">
        <a href="/" class="flex items-center space-x-3">
          <div class="relative">
            <img src="{{ asset('img/logo.svg') }}" alt="POMETLAW" class="h-8 lg:h-10 w-auto">
          </div>
          <span class="text-xl lg:text-2xl font-bold text-delft-blue tracking-tight">POMETLAW</span>
        </a>
      </div>

      <!-- Desktop Navigation -->
      <nav class="hidden lg:flex items-center space-x-1">
        <a href="#kurzy" class="px-4 py-2 text-brand-text font-medium rounded-xl">
          Kurzy a semináře
        </a>
        <a href="#o-nas" class="px-4 py-2 text-brand-text font-medium rounded-xl">
          O společnosti
        </a>
        <a href="#reference" class="px-4 py-2 text-brand-text font-medium rounded-xl">
          Reference
        </a>
        <a href="#kontakt" class="px-4 py-2 text-brand-text font-medium rounded-xl">
          Kontakt
        </a>
      </nav>

      <!-- CTA Button & Mobile Menu -->
      <div class="flex items-center space-x-4">
        <!-- CTA Button -->
        <x-button-primary href="#prihlaseni" size="sm" class="hidden sm:inline-flex">
          <x-hugeicons-user class="w-4 h-4" />
          <span>Přihlásit se na kurz</span>
        </x-button-primary>

        <!-- Mobile menu button -->
        <button type="button"
          class="lg:hidden inline-flex items-center justify-center p-2.5 rounded-xl text-brand-text focus:outline-none focus:ring-2 focus:ring-delft-blue"
          aria-controls="mobile-menu" aria-expanded="false" id="mobile-menu-button">
          <span class="sr-only">Otevřít hlavní menu</span>
          <!-- Menu icon -->
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile menu -->
  <div class="lg:hidden hidden" id="mobile-menu">
    <div class="px-4 pt-2 pb-6 space-y-1 bg-white border-t border-paynes-gray/20">
      <a href="#kurzy" class="flex items-center gap-3 px-4 py-3 text-brand-text font-medium rounded-xl">
        <x-hugeicons-course class="w-5 h-5" />
        <span>Kurzy a semináře</span>
      </a>
      <a href="#o-nas" class="flex items-center gap-3 px-4 py-3 text-brand-text font-medium rounded-xl">
        <x-hugeicons-building-03 class="w-5 h-5" />
        <span>O společnosti</span>
      </a>
      <a href="#reference" class="flex items-center gap-3 px-4 py-3 text-brand-text font-medium rounded-xl">
        <x-hugeicons-user-star-01 class="w-5 h-5" />
        <span>Reference</span>
      </a>
      <a href="#kontakt" class="flex items-center gap-3 px-4 py-3 text-brand-text font-medium rounded-xl">
        <x-hugeicons-mail-01 class="w-5 h-5" />
        <span>Kontakt</span>
      </a>

      <!-- Mobile CTA -->
      <div class="pt-4 mt-4 border-t border-paynes-gray/20">
        <x-button-primary href="#prihlaseni" size="md" class="w-full">
          <x-hugeicons-user class="w-4 h-4" />
          <span>Přihlásit se na kurz</span>
        </x-button-primary>
      </div>
    </div>
  </div>

  <!-- Mobile menu toggle script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const button = document.getElementById('mobile-menu-button');
      const menu = document.getElementById('mobile-menu');

      button.addEventListener('click', function() {
        const isExpanded = button.getAttribute('aria-expanded') === 'true';
        button.setAttribute('aria-expanded', !isExpanded);
        menu.classList.toggle('hidden');
      });

      // Close menu when clicking on links
      const menuLinks = menu.querySelectorAll('a');
      menuLinks.forEach(link => {
        link.addEventListener('click', function() {
          button.setAttribute('aria-expanded', 'false');
          menu.classList.add('hidden');
        });
      });
    });
  </script>
</header>
