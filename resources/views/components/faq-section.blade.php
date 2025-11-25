<section class="py-12 lg:py-24 bg-white">
  <div class="container mx-auto px-4">
    <div class="text-center mb-16">
      <h2>Často kladené dotazy</h2>
      <p class="text-lg text-gray-50 max-w-2xl mx-auto">Odpovědi na nejčastější otázky ohledně našich školení a služeb.</p>
    </div>
    <div class="max-w-3xl mx-auto" x-data="{ active: null }">
      <div class="space-y-4">
        <div class="border border-zinc-200 rounded-xl overflow-hidden bg-white">
          <button @click="active = (active === 1 ? null : 1)" class="w-full flex items-center justify-between p-6 text-left bg-white hover:bg-zinc-50 transition-colors">
            <span class="font-medium text-zinc-900 text-lg">Jak se mohu přihlásit na školení?</span>
            <span class="ml-6 flex-shrink-0 text-zinc-400" :class="{ 'rotate-180': active === 1 }">
              <svg class="w-5 h-5 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </span>
          </button>
          <div x-show="active === 1" x-collapse x-cloak>
            <div class="p-6 pt-0 text-zinc-600 leading-relaxed border-t border-zinc-100">
              Na školení se můžete přihlásit přímo přes detail dané akce na našem webu. Stačí kliknout na tlačítko "Registrovat na akci" a vyplnit krátký formulář. Po odeslání vám zašleme potvrzení a platební údaje.
            </div>
          </div>
        </div>

        <div class="border border-zinc-200 rounded-xl overflow-hidden bg-white">
          <button @click="active = (active === 2 ? null : 2)" class="w-full flex items-center justify-between p-6 text-left bg-white hover:bg-zinc-50 transition-colors">
            <span class="font-medium text-zinc-900 text-lg">Jsou školení vhodná i pro úplné začátečníky?</span>
            <span class="ml-6 flex-shrink-0 text-zinc-400" :class="{ 'rotate-180': active === 2 }">
              <svg class="w-5 h-5 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </span>
          </button>
          <div x-show="active === 2" x-collapse x-cloak>
            <div class="p-6 pt-0 text-zinc-600 leading-relaxed border-t border-zinc-100">
              Ano, nabízíme školení pro různé úrovně pokročilosti. U každého kurzu je uvedeno, pro koho je určen. Máme speciální úvodní kurzy pro nováčky v oblasti veřejných zakázek, kde vysvětlujeme základy srozumitelnou formou.
            </div>
          </div>
        </div>

        <div class="border border-zinc-200 rounded-xl overflow-hidden bg-white">
          <button @click="active = (active === 3 ? null : 3)" class="w-full flex items-center justify-between p-6 text-left bg-white hover:bg-zinc-50 transition-colors">
            <span class="font-medium text-zinc-900 text-lg">Poskytujete materiály ze školení?</span>
            <span class="ml-6 flex-shrink-0 text-zinc-400" :class="{ 'rotate-180': active === 3 }">
              <svg class="w-5 h-5 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </span>
          </button>
          <div x-show="active === 3" x-collapse x-cloak>
            <div class="p-6 pt-0 text-zinc-600 leading-relaxed border-t border-zinc-100">
              Samozřejmě. Každý účastník obdrží tištěné i elektronické materiály, které obsahují prezentaci, vzory dokumentů a praktické checklisty. Materiály jsou koncipovány tak, aby vám sloužily jako "tahák" v každodenní praxi.
            </div>
          </div>
        </div>

        <div class="border border-zinc-200 rounded-xl overflow-hidden bg-white">
          <button @click="active = (active === 4 ? null : 4)" class="w-full flex items-center justify-between p-6 text-left bg-white hover:bg-zinc-50 transition-colors">
            <span class="font-medium text-zinc-900 text-lg">Nabízíte i školení na míru pro firmy?</span>
            <span class="ml-6 flex-shrink-0 text-zinc-400" :class="{ 'rotate-180': active === 4 }">
              <svg class="w-5 h-5 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </span>
          </button>
          <div x-show="active === 4" x-collapse x-cloak>
            <div class="p-6 pt-0 text-zinc-600 leading-relaxed border-t border-zinc-100">
              Ano, realizujeme zakázková školení přímo u klienta nebo online. Obsah přizpůsobíme vašim konkrétním potřebám a typu zakázek, které řešíte. Kontaktujte nás pro nezávaznou nabídku.
            </div>
          </div>
        </div>
      </div>

      <div class="mt-16 text-center">
        <h3 class="text-xl font-semibold text-zinc-900 mb-2">Nenašli jste odpověď?</h3>
        <p class="text-zinc-500 mb-6">Rádi vám poradíme osobně. Napište nám nebo zavolejte.</p>
        <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 bg-white border border-zinc-200 text-zinc-900 font-medium rounded-xl hover:bg-zinc-50 hover:border-zinc-300 transition-colors">Kontaktujte nás</a>
      </div>
    </div>
  </div>
</section>
