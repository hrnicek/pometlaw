@props(['nearestEvent'])

<section class="relative bg-delft-blue" x-data="{ mobileNavOpen: false }">
  <img class="absolute top-0 left-0 w-full h-full object-cover opacity-10" src="data:image/svg+xml,%3Csvg width='1440' height='600' viewBox='0 0 1440 600' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0 300C240 200 480 400 720 300C960 200 1200 400 1440 300V600H0V300Z' fill='%23ffffff'/%3E%3C/svg%3E" alt="Background waves"/>
  
  <x-navbar theme="bg-transparent" mode="light" />

  <div class="relative pt-18 pb-24 sm:pb-32 lg:pt-36 lg:pb-62 z-10">
    <div class="container mx-auto px-4 relative">
      <div class="max-w-lg xl:max-w-xl mx-auto text-center">
        <h1 class="font-heading text-5xl xs:text-7xl xl:text-8xl tracking-tight text-white mb-8">
          Děláme ve veřejných zakázkách
          <br class="hidden lg:block" />
          <span class="text-moonstone">čistý stůl</span>
        </h1>
        <p class="max-w-md xl:max-w-none text-lg text-white opacity-80 mb-10">
          Zbavujeme vás práce, kterou po vás zákon nechce. Vymetáme staré postupy a byrokratické zvyklosti, které celý proces jen brzdí.
        </p>
        <x-ui.button-primary href="{{ route('events.index') }}" class="bg-moonstone hover:bg-moonstone/90 border-moonstone">
          Prohlédnout školení
        </x-ui.button-primary>
      </div>
    </div>
  </div>

</section>