@props(['upcomingEvents'])

<section class="py-20 lg:py-28">
  <div class="mx-auto max-w-6xl px-4">
    <div class="grid gap-12 lg:grid-cols-[1.05fr_0.95fr] lg:items-center">
      <div class="flex flex-col gap-10">
        <div class="space-y-6">
          <span class="inline-flex w-fit items-center gap-2 rounded-full border border-delft-blue/20 bg-delft-blue/10 px-4 py-2 text-sm font-medium text-delft-blue">
            Moderní vzdělávání pro veřejné zakázky
          </span>

          <div class="space-y-4">
            <h1 class="text-4xl font-semibold text-gray-75 md:text-5xl lg:text-6xl">
              Vyčistíme staré postupy
              <br class="hidden lg:block" />
              <span class="text-delft-blue">pometlem modernosti</span>
            </h1>

            <p class="text-lg text-gray-50 lg:text-xl">
              Zjednodušujeme administrativu, převádíme legislativní požadavky do srozumitelných kroků
              a tvoříme vzdělávání, které má okamžitý dopad na praxi vašeho týmu.
            </p>
          </div>
        </div>

        <div class="flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between">
          <div class="inline-flex items-center gap-4">
            <div class="flex -space-x-3">
              <div class="flex h-11 w-11 items-center justify-center rounded-full border border-white bg-delft-blue text-sm font-medium text-white">
                JD
              </div>
              <div class="flex h-11 w-11 items-center justify-center rounded-full border border-white bg-moonstone text-sm font-medium text-white">
                MS
              </div>
              <div class="flex h-11 w-11 items-center justify-center rounded-full border border-white bg-paynes-gray text-sm font-medium text-white">
                PK
              </div>
            </div>

            <div class="space-y-1">
              <p class="text-sm font-medium text-gray-75">Hodnocení 5.0 z 5</p>
              <p class="text-sm text-gray-50">200+ organizací z veřejné správy</p>
            </div>
          </div>

          <div class="flex items-center gap-4 text-sm text-gray-50">
            <span class="flex h-10 w-10 items-center justify-center rounded-full border border-gray-20 text-gray-75">
              <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M8 7V3m8 4V3m-9 8h10m-11 9h12a2 2 0 002-2v-9a2 2 0 00-2-2H6a2 2 0 00-2 2v9a2 2 0 002 2z" />
              </svg>
            </span>
            <div>
              <p class="font-medium text-gray-75">Aktuální legislativa</p>
              <p>Obsah vždy podle nejnovějších předpisů</p>
            </div>
          </div>
        </div>

        <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
          <x-ui.button-primary href="{{ route('events.index') }}">
            Prohlédnout školení
          </x-ui.button-primary>

          <x-ui.button-outline href="{{ route('contact') }}">
            Domluvit konzultaci
          </x-ui.button-outline>
        </div>
      </div>

      <div class="rounded-xl border border-gray-20 bg-white p-8 lg:p-10">
        <div class="rounded-xl bg-gradient-to-br from-delft-blue via-paynes-gray to-moonstone p-10 text-white">
          <p class="text-lg font-medium">Program „Pometlem modernosti“</p>

          <ul class="mt-6 space-y-4 text-sm text-white/80">
            <li class="flex items-start gap-3">
              <span class="mt-1 inline-flex h-2.5 w-2.5 rounded-full bg-white/70"></span>
              Audit a zmapování aktuálních procesů veřejných zakázek
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-1 inline-flex h-2.5 w-2.5 rounded-full bg-white/70"></span>
              Workshop na míru s praktickými scénáři a doporučenými postupy
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-1 inline-flex h-2.5 w-2.5 rounded-full bg-white/70"></span>
              Implementační podpora a kontrolní checklisty k legislativě
            </li>
          </ul>
        </div>

        <dl class="mt-8 grid gap-6 sm:grid-cols-2">
          <div class="rounded-xl border border-gray-20 bg-gray-5/60 p-4 text-left">
            <dt class="text-xs font-medium uppercase tracking-[0.08em] text-gray-50">Realizovaných kurzů</dt>
            <dd class="mt-2 text-2xl font-semibold text-gray-75">380+</dd>
          </div>

          <div class="rounded-xl border border-gray-20 bg-gray-5/60 p-4 text-left">
            <dt class="text-xs font-medium uppercase tracking-[0.08em] text-gray-50">Ušetřený čas administrativy</dt>
            <dd class="mt-2 text-2xl font-semibold text-gray-75">-35&nbsp;%</dd>
          </div>
        </dl>
      </div>
    </div>
  </div>
</section>
