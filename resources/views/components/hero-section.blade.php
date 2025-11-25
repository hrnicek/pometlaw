@props(['nearestEvent'])

<section class="p-4 bg-white">
  <div class="pt-4 pb-24 px-5 xs:px-8 xl:px-12 bg-delft-blue rounded-3xl overflow-hidden relative shadow-xl">
    {{-- Background Pattern --}}
    <div class="absolute inset-0 opacity-10">
      <svg class="w-full h-full" viewBox="0 0 1440 600" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <path d="M0 300C240 200 480 400 720 300C960 200 1200 400 1440 300V600H0V300Z" fill="#ffffff"/>
      </svg>
    </div>
    <img src="/img/symbol/bily/symbol.svg" alt="Pometlaw symbol" class="absolute right-8 bottom-6 w-48 opacity-10 pointer-events-none" />
    
    <x-navbar theme="bg-transparent" mode="light" />

    <div class="container mx-auto px-4 relative z-10">
      <div class="border-t border-white/25 pt-14">
        <h1 class="text-white max-w-3xl font-heading font-bold text-4xl sm:text-5xl md:text-6xl leading-tight mb-6">
          Děláme ve veřejných zakázkách
          <span class="text-moonstone">čistý stůl</span>
        </h1>
        <p class="text-lg text-white/80 mb-12 max-w-2xl leading-relaxed">
          Zbavujeme vás práce, kterou po vás zákon nechce. Vymetáme staré postupy a byrokratické zvyklosti, které celý proces jen brzdí.
        </p>
        <div class="flex flex-col sm:flex-row items-start gap-4">
          <a href="{{ route('events.index') }}" class="inline-flex items-center px-8 py-4 bg-moonstone hover:bg-white hover:text-delft-blue text-white font-medium rounded-xl transition-all duration-300 shadow-md hover:shadow-lg">
            Prohlédnout školení
          </a>
          <a href="{{ route('contact') }}" class="inline-flex items-center text-white hover:text-moonstone font-medium px-6 py-3 transition-colors group">
            Nezávazná konzultace
            <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
