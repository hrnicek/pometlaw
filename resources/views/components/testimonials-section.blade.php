<section class="p-4 bg-white">
    <div class="py-12 lg:py-24 bg-gray-5 rounded-3xl overflow-hidden relative" x-data="{ activeSlide: 1, slideCount: 3 }">
        
        <div class="absolute top-0 right-0 w-64 h-64 bg-moonstone/5 rounded-full blur-3xl pointer-events-none -mr-16 -mt-16"></div>

        <div class="container mx-auto px-4 relative z-10">
            
            <div class="flex items-center mb-12 lg:mb-16 px-4">
                <div class="h-px w-8 bg-moonstone mr-4"></div>
                <span class="text-delft-blue font-medium tracking-wide uppercase text-sm">Lidé v Pometlaw</span>
            </div>

            <div class="flex flex-wrap items-center -mx-4">
                
                <div class="w-full md:w-1/2 px-4 mb-12 md:mb-0">
                    <div class="max-w-lg mx-auto md:mx-0 relative">
                        <div class="absolute inset-0 bg-white border border-gray-20 transform rotate-3 rounded-2xl shadow-sm z-0"></div>
                        
                        <div class="relative z-10 overflow-hidden rounded-2xl bg-gray-20 aspect-[4/5] md:aspect-square lg:aspect-[4/5]">
                            <div class="flex h-full transition-transform duration-500 ease-out" :style="'transform: translateX(-' + (activeSlide - 1) * 100 + '%)'">
                                <img class="block flex-shrink-0 w-full h-full object-cover object-center" src="/img/petrpernica.jpeg" alt="Petr Pernica"/>
                                <img class="block flex-shrink-0 w-full h-full object-cover object-center" src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=800" alt="Další člen"/>
                                <img class="block flex-shrink-0 w-full h-full object-cover object-center" src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=800" alt="Další člen"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-1/2 px-4">
                    <div class="max-w-lg mx-auto md:mr-0 overflow-hidden">
                        
                        <div class="flex -mx-4 transition-transform duration-500 ease-out" :style="'transform: translateX(-' + (activeSlide - 1) * 100 + '%)'">
                            
                            <div class="flex-shrink-0 px-4 w-full">
                                <h3 class="text-3xl lg:text-4xl font-heading text-delft-blue mb-2">Petr Pernica</h3>
                                <p class="text-moonstone font-medium text-lg mb-8">Zakladatel & Advokát</p>
                                
                                <p class="text-lg text-gray-75 leading-relaxed mb-8">
                                    "Mým cílem není jen vyhrávat spory, ale nastavit procesy tak, aby k nim vůbec nemuselo docházet. Veřejné zakázky vnímám jako šachovou partii, kde vyhrává ten, kdo vidí o tři tahy dopředu a má uklizeno na stole."
                                </p>
                                
                                <a href="#" class="inline-flex items-center text-paynes-gray hover:text-delft-blue transition-colors font-medium">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                    Spojit se na LinkedIn
                                </a>
                            </div>

                            <div class="flex-shrink-0 px-4 w-full">
                                <h3 class="text-3xl lg:text-4xl font-heading text-delft-blue mb-2">Jana Nováková</h3>
                                <p class="text-moonstone font-medium text-lg mb-8">Senior Konzultantka</p>
                                <p class="text-lg text-gray-75 leading-relaxed mb-8">
                                    "Specializuji se na administrativní zjednodušení. Ukazuji úřadům, že digitalizace není strašák, ale nejlepší přítel úředníka. Kde ostatní vidí papíry, já vidím strukturovaná data."
                                </p>
                                <a href="#" class="inline-flex items-center text-paynes-gray hover:text-delft-blue transition-colors font-medium">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                    Spojit se na LinkedIn
                                </a>
                            </div>

                             <div class="flex-shrink-0 px-4 w-full">
                                <h3 class="text-3xl lg:text-4xl font-heading text-delft-blue mb-2">Martin Dvořák</h3>
                                <p class="text-moonstone font-medium text-lg mb-8">Analytik veřejných zakázek</p>
                                <p class="text-lg text-gray-75 leading-relaxed mb-8">
                                    "Data nelžou, jen se musí umět přečíst. V Pometlaw zajišťuji, aby každé rozhodnutí klienta bylo podloženo tvrdými čísly a legislativní jistotou."
                                </p>
                                <a href="#" class="inline-flex items-center text-paynes-gray hover:text-delft-blue transition-colors font-medium">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                    Spojit se na LinkedIn
                                </a>
                            </div>

                        </div>

                        <div class="mt-12 flex items-center">
                            <button class="flex items-center justify-center w-12 h-12 rounded-full border border-gray-30 text-delft-blue hover:bg-delft-blue hover:text-white transition-all duration-200 mr-4 group" 
                                    x-on:click="activeSlide = activeSlide > 1 ? activeSlide - 1 : slideCount">
                                <svg class="w-5 h-5 transform group-hover:-translate-x-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                </svg>
                            </button>

                            <div class="flex space-x-2 mr-4">
                                <template x-for="slide in slideCount">
                                    <div class="h-1 rounded-full transition-all duration-300" 
                                         :class="activeSlide === slide ? 'w-8 bg-moonstone' : 'w-2 bg-gray-30'"></div>
                                </template>
                            </div>

                            <button class="flex items-center justify-center w-12 h-12 rounded-full border border-gray-30 text-delft-blue hover:bg-delft-blue hover:text-white transition-all duration-200 ml-auto md:ml-0 group" 
                                    x-on:click="activeSlide = activeSlide < slideCount ? activeSlide + 1 : 1">
                                <svg class="w-5 h-5 transform group-hover:translate-x-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>