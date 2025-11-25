@props(['articles' => null])

<section class="py-16 bg-gray-5">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="mb-12 space-y-4 text-center sm:mb-16 lg:mb-24">
            <p class="text-delft-blue text-sm font-medium uppercase">Blog</p>
            <h2 class="text-gray-75 text-2xl font-semibold md:text-3xl lg:text-4xl">Aktuality z právního světa</h2>
            <p class="text-gray-50 text-xl">
                Zůstaňte informováni o nejnovějších změnách v legislativě a praktických radách.
            </p>
        </div>

        <!-- Blog Grid -->
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
            @if($articles && count($articles) > 0)
                @foreach($articles as $article)
                    <x-card-article
                        :title="$article->title"
                        :excerpt="$article->perex"
                        :href="route('articles.show', $article)"
                        :image="$article->getFirstMediaUrl('image')"
                        :date="$article->published_at"
                    />
                @endforeach
            @else
                <x-card-article 
                    title="Zákony o převodu nemovitého majetku"
                    excerpt="Přehled základních principů převodu nemovitého majetku a důležitých právních aspektů, které je třeba zvážit při transakcích s nemovitostmi."
                    href="#"
                    image="https://cdn.flyonui.com/fy-assets/blocks/marketing-ui/blog/blog-36.png"
                />

                <x-card-article 
                    title="Územní plán Prahy 2026 a hlavní plán"
                    excerpt="Podrobný rozbor nového územního plánu hlavního města Prahy pro rok 2026 a jeho dopady na development a stavební projekty."
                    href="#"
                    image="https://cdn.flyonui.com/fy-assets/blocks/marketing-ui/blog/blog-37.png"
                />

                <x-card-article 
                    title="Co je smlouva o prodeji nemovitosti?"
                    excerpt="Kompletní průvodce smlouvou o prodeji nemovitosti - od základních náležitostí až po praktické rady pro bezpečnou transakci."
                    href="#"
                    image="https://cdn.flyonui.com/fy-assets/blocks/marketing-ui/blog/blog-38.png"
                />
            @endif
        </div>
    </div>
</section>
