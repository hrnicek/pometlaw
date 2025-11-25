@props(['nearestEvent'])

<section class="relative bg-delft-blue overflow-hidden" x-data="{ mobileNavOpen: false }">
  {{-- Background Pattern --}}
  <div class="absolute inset-0 opacity-10">
    <svg class="w-full h-full" viewBox="0 0 1440 600" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
      <path d="M0 300C240 200 480 400 720 300C960 200 1200 400 1440 300V600H0V300Z" fill="#ffffff"/>
    </svg>
  </div>
  
  <x-navbar theme="bg-transparent" mode="light" />

  <div class="relative pt-24 pb-32 lg:pt-40 lg:pb-48 z-10">
    <div class="container mx-auto px-4 relative">
      <div class="max-w-3xl mx-auto text-center">
        <h1 class="font-bold text-5xl md:text-7xl lg:text-8xl tracking-tight text-white mb-8 leading-tight">
          Děláme ve veřejných zakázkách
          <span class="text-moonstone block mt-2">čistý stůl</span>
        </h1>
        <p class="text-lg md:text-xl text-zinc-300 mb-12 max-w-2xl mx-auto leading-relaxed">
          Zbavujeme vás práce, kterou po vás zákon nechce. Vymetáme staré postupy a byrokratické zvyklosti, které celý proces jen brzdí.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <x-ui.button-primary href="{{ route('events.index') }}" class="bg-moonstone hover:bg-moonstone/90 border-moonstone text-lg px-8 py-4 w-full sm:w-auto">
            Prohlédnout školení
            </x-ui.button-primary>
            <a href="{{ route('contact') }}" class="text-white hover:text-moonstone font-medium px-6 py-3 transition-colors">
                Nezávazná konzultace
            </a>
        </div>
      </div>
    </div>
  </div>
</section>