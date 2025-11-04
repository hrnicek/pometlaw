<section class="py-16 bg-gray-5">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-75 mb-6">
                Připraveni modernizovat své procesy?
            </h2>
            <p class="text-xl text-gray-50 mb-8 max-w-2xl mx-auto">
                Kontaktujte nás ještě dnes a získejte konzultaci zdarma. Pomůžeme vám vyčistit staré postupy pometlem modernosti.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <x-ui.button-primary href="{{ route('contact') }}">
                    Kontaktovat nás
                </x-ui.button-primary>
                <x-ui.button-outline href="{{ route('events.index') }}">
                    Naše školení
                </x-ui.button-outline>
            </div>
        </div>
    </div>
</section>