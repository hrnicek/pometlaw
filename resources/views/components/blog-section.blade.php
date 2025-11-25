@props(['articles' => null])

<section class="py-20 lg:py-32 bg-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-gray-5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>

    <div class="container mx-auto px-6 md:px-10 relative z-10">
        
        <div class="mb-16 md:mb-24 max-w-3xl">
            <div class="flex items-center space-x-3 mb-6">
                <div class="w-2 h-2 rounded-full bg-moonstone shadow-[0_0_8px_rgba(101,153,155,0.4)]"></div>
                <span class="text-paynes-gray text-xs font-bold tracking-widest uppercase">Pometlaw Blog</span>
            </div>
            
            <h2>
                Aktuality z <br>
                <span class="text-moonstone">právního světa</span>
            </h2>
            
            <p class="text-gray-50 text-lg font-light max-w-xl leading-relaxed">
                Zůstaňte v obraze. Sledujeme legislativní změny ve veřejných zakázkách a překládáme je do srozumitelné řeči.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-12">
            
            @if($articles && count($articles) > 0)
                @foreach($articles as $article)
                    <article class="group flex flex-col h-full bg-transparent">
                        <a href="{{ route('articles.show', $article) }}" class="block overflow-hidden rounded-2xl mb-6 relative aspect-[3/2]">
                            <div class="absolute inset-0 bg-delft-blue/0 group-hover:bg-delft-blue/10 transition-colors duration-300 z-10"></div>
                            
                            @if($article->hasMedia('image'))
                                <img src="{{ $article->getFirstMediaUrl('image') }}" 
                                     alt="{{ $article->title }}" 
                                     class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full bg-gray-5 flex items-center justify-center">
                                    <svg class="w-12 h-12 text-gray-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                            @endif
                        </a>

                        <div class="flex flex-col flex-grow">
                            <div class="flex items-center text-xs font-medium text-moonstone uppercase tracking-wider mb-3">
                                <time datetime="{{ $article->published_at->format('Y-m-d') }}">
                                    {{ $article->published_at->format('d. m. Y') }}
                                </time>
                                <span class="mx-2 text-gray-20">•</span>
                                <span>Novinka</span>
                            </div>

                            <h3 class="text-2xl font-heading font-bold text-delft-blue mb-3 group-hover:text-moonstone transition-colors duration-200">
                                <a href="{{ route('articles.show', $article) }}">
                                    {{ $article->title }}
                                </a>
                            </h3>

                            <p class="text-gray-50 text-base leading-relaxed mb-6 line-clamp-3">
                                {{ $article->perex }}
                            </p>

                            <div class="mt-auto">
                                <a href="{{ route('articles.show', $article) }}" class="inline-flex items-center text-sm font-bold text-delft-blue group-hover:text-moonstone transition-colors">
                                    Číst článek
                                    <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            @else
                <article class="group flex flex-col h-full bg-transparent">
                    <a href="#" class="block overflow-hidden rounded-2xl mb-6 relative aspect-[3/2]">
                        <div class="absolute inset-0 bg-delft-blue/0 group-hover:bg-delft-blue/10 transition-colors duration-300 z-10"></div>
                        <img src="https://cdn.flyonui.com/fy-assets/blocks/marketing-ui/blog/blog-36.png" alt="Nemovitosti" class="w-full h-full object-cover">
                    </a>
                    <div class="flex flex-col flex-grow">
                        <div class="flex items-center text-xs font-medium text-moonstone uppercase tracking-wider mb-3">
                            <time>24. 11. 2025</time> <span class="mx-2 text-gray-20">•</span> <span>Legislativa</span>
                        </div>
                        <h3 class="text-2xl font-heading font-bold text-delft-blue mb-3 group-hover:text-moonstone transition-colors duration-200">
                            <a href="#">Zákony o převodu nemovitého majetku</a>
                        </h3>
                        <p class="text-gray-50 text-base leading-relaxed mb-6 line-clamp-3">
                            Přehled základních principů převodu nemovitého majetku a důležitých právních aspektů, které je třeba zvážit při transakcích.
                        </p>
                        <div class="mt-auto">
                            <a href="#" class="inline-flex items-center text-sm font-bold text-delft-blue group-hover:text-moonstone transition-colors">
                                Číst článek
                                <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

                <article class="group flex flex-col h-full bg-transparent">
                    <a href="#" class="block overflow-hidden rounded-2xl mb-6 relative aspect-[3/2]">
                        <div class="absolute inset-0 bg-delft-blue/0 group-hover:bg-delft-blue/10 transition-colors duration-300 z-10"></div>
                        <img src="https://cdn.flyonui.com/fy-assets/blocks/marketing-ui/blog/blog-37.png" alt="Územní plán" class="w-full h-full object-cover">
                    </a>
                    <div class="flex flex-col flex-grow">
                        <div class="flex items-center text-xs font-medium text-moonstone uppercase tracking-wider mb-3">
                            <time>18. 11. 2025</time> <span class="mx-2 text-gray-20">•</span> <span>Development</span>
                        </div>
                        <h3 class="text-2xl font-heading font-bold text-delft-blue mb-3 group-hover:text-moonstone transition-colors duration-200">
                            <a href="#">Územní plán Prahy 2026 a hlavní plán</a>
                        </h3>
                        <p class="text-gray-50 text-base leading-relaxed mb-6 line-clamp-3">
                            Podrobný rozbor nového územního plánu hlavního města Prahy pro rok 2026 a jeho dopady na stavební projekty.
                        </p>
                        <div class="mt-auto">
                            <a href="#" class="inline-flex items-center text-sm font-bold text-delft-blue group-hover:text-moonstone transition-colors">
                                Číst článek
                                <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

                <article class="group flex flex-col h-full bg-transparent">
                    <a href="#" class="block overflow-hidden rounded-2xl mb-6 relative aspect-[3/2]">
                        <div class="absolute inset-0 bg-delft-blue/0 group-hover:bg-delft-blue/10 transition-colors duration-300 z-10"></div>
                        <img src="https://cdn.flyonui.com/fy-assets/blocks/marketing-ui/blog/blog-38.png" alt="Smlouva" class="w-full h-full object-cover">
                    </a>
                    <div class="flex flex-col flex-grow">
                        <div class="flex items-center text-xs font-medium text-moonstone uppercase tracking-wider mb-3">
                            <time>10. 11. 2025</time> <span class="mx-2 text-gray-20">•</span> <span>Praxe</span>
                        </div>
                        <h3 class="text-2xl font-heading font-bold text-delft-blue mb-3 group-hover:text-moonstone transition-colors duration-200">
                            <a href="#">Co je smlouva o prodeji nemovitosti?</a>
                        </h3>
                        <p class="text-gray-50 text-base leading-relaxed mb-6 line-clamp-3">
                            Kompletní průvodce smlouvou o prodeji nemovitosti - od základních náležitostí až po praktické rady pro bezpečnou transakci.
                        </p>
                        <div class="mt-auto">
                            <a href="#" class="inline-flex items-center text-sm font-bold text-delft-blue group-hover:text-moonstone transition-colors">
                                Číst článek
                                <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

            @endif
        </div>
    </div>
</section>
