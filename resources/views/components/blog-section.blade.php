@props(['articles' => null])

<section class="py-20 lg:py-24 bg-white relative overflow-hidden">
    <img src="/img/symbol/delft-blue/symbo-delft-bluel.svg" alt="Pometlaw symbol" class="absolute right-6 top-6 w-24 opacity-10 pointer-events-none" />
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
                    <x-card-article 
                        :title="$article->title"
                        :excerpt="$article->perex"
                        :href="route('articles.show', $article)"
                        :image="$article->hasMedia('image') ? $article->getFirstMediaUrl('image') : null"
                        :date="$article->published_at"
                    />
                @endforeach
            @else
                <x-card-article 
                    title="Zákony o převodu nemovitého majetku"
                    excerpt="Přehled základních principů převodu nemovitého majetku a důležitých právních aspektů, které je třeba zvážit při transakcích."
                    href="#"
                    image="https://cdn.flyonui.com/fy-assets/blocks/marketing-ui/blog/blog-36.png"
                    :date="\Carbon\Carbon::parse('2025-11-24')"
                />

                <x-card-article 
                    title="Územní plán Prahy 2026 a hlavní plán"
                    excerpt="Podrobný rozbor nového územního plánu hlavního města Prahy pro rok 2026 a jeho dopady na stavební projekty."
                    href="#"
                    image="https://cdn.flyonui.com/fy-assets/blocks/marketing-ui/blog/blog-37.png"
                    :date="\Carbon\Carbon::parse('2025-11-18')"
                />

                <x-card-article 
                    title="Co je smlouva o prodeji nemovitosti?"
                    excerpt="Kompletní průvodce smlouvou o prodeji nemovitosti - od základních náležitostí až po praktické rady pro bezpečnou transakci."
                    href="#"
                    image="https://cdn.flyonui.com/fy-assets/blocks/marketing-ui/blog/blog-38.png"
                    :date="\Carbon\Carbon::parse('2025-11-10')"
                />
            @endif
        </div>
    </div>
</section>
