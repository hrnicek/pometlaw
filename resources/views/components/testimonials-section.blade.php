<section class="py-12 lg:py-24 overflow-hidden" x-data="{ activeSlide: 1, slideCount: 3 }">
  <div class="container mx-auto px-4">
    <div class="flex flex-wrap items-center -mx-4">
      <div class="w-full md:w-1/2 px-4 mb-12 md:mb-0">
        <div class="max-w-lg mx-auto md:mx-0 overflow-hidden">
          <div class="flex -mx-4 transition-transform duration-500" :style="'transform: translateX(-' + (activeSlide - 1) * 100 + '%)'">
            <img class="block flex-shrink-0 w-full px-4 rounded-lg border border-gray-20" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=600&fit=crop&crop=center" alt="Klient"/>
            <img class="block flex-shrink-0 w-full px-4 rounded-lg border border-gray-20" src="https://images.unsplash.com/photo-1494790108755-2616b612b786?w=400&h=600&fit=crop&crop=center" alt="Klientka"/>
            <img class="block flex-shrink-0 w-full px-4 rounded-lg border border-gray-20" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&h=600&fit=crop&crop=center" alt="Klient"/>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-4">
        <div class="max-w-lg mx-auto md:mr-0 overflow-hidden">
          <div class="flex -mx-4 transition-transform duration-500" :style="'transform: translateX(-' + (activeSlide - 1) * 100 + '%)'">
            <div class="flex-shrink-0 px-4 w-full">
              <h4 class="text-3xl lg:text-4xl font-medium mb-10 text-delft-blue">"Pometlaw transformoval způsob, jakým pracujeme s veřejnými zakázkami. Efektivní, zelené technologie, vynikající služby!"</h4>
              <span class="block text-xl font-medium text-delft-blue">Jan Novák</span>
              <span class="block mb-12 lg:mb-32 text-lg text-gray-50">Manažer veřejného sektoru</span>
            </div>
            <div class="flex-shrink-0 px-4 w-full">
              <h4 class="text-3xl lg:text-4xl font-medium mb-10 text-delft-blue">"Efektivní, zelené technologie, vynikající služby"</h4>
              <span class="block text-xl font-medium text-delft-blue">Marie Svobodová</span>
              <span class="block mb-12 lg:mb-32 text-lg text-gray-50">CEO, Zelené řešení s.r.o.</span>
            </div>
            <div class="flex-shrink-0 px-4 w-full">
              <h4 class="text-3xl lg:text-4xl font-medium mb-10 text-delft-blue">"Pometlaw transformoval způsob, jakým pracujeme s veřejnými zakázkami, efektivní, zelené technologie, vynikající služby."</h4>
              <span class="block text-xl font-medium text-delft-blue">Petr Dvořák</span>
              <span class="block mb-12 lg:mb-32 text-lg text-gray-50">Vývojář</span>
            </div>
          </div>
          <div>
            <button class="inline-block mr-4 text-gray-50 hover:text-moonstone transition-colors" x-on:click="activeSlide = activeSlide > 1 ? activeSlide - 1 : slideCount">
              <svg width="32" height="32" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M24.4 16H7.59998" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M16 24.4L7.59998 16L16 7.59998" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </button>
            <button class="inline-block text-gray-50 hover:text-moonstone transition-colors" x-on:click="activeSlide = activeSlide < slideCount ? activeSlide + 1 : 1">
              <svg width="32" height="32" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.59998 16H24.4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M16 7.59998L24.4 16L16 24.4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>