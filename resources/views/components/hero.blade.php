<!-- Hero Section -->
<section class="bg-white py-16 lg:py-20">
    <div class="max-container container-padding">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <!-- Content Column -->
            <div class="space-y-8">
                <!-- Status Badge -->
                <div class="inline-flex items-center px-4 py-2 bg-delft-blue/10 border border-delft-blue/20 rounded-xl">
                    <div class="w-2 h-2 bg-moonstone rounded-full mr-3"></div>
                    <span class="text-delft-blue font-medium text-sm">Moderní vzdělávací platforma</span>
                </div>

                <!-- Main Heading -->
                <div class="space-y-6">
                    <h1 class="text-4xl lg:text-6xl font-bold text-delft-blue leading-tight">
                        Vymetáme
                        <span class="text-moonstone block">zastaralé postupy</span>
                        <span class="text-paynes-gray block text-2xl lg:text-3xl font-medium mt-2">ve veřejných zakázkách</span>
                    </h1>
                    
                    <p class="text-lg lg:text-xl text-brand-text leading-relaxed">
                        Vzdělávací a poradenská platforma pro právníky a profesionály. 
                        <strong class="text-delft-blue font-semibold">Zpřehledňujeme a zjednodušujeme</strong> 
                        legislativu bez zbytečných komplikací.
                    </p>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <x-button-primary href="#kurzy" size="lg">
                        <x-hugeicons-calendar-03 class="w-5 h-5 mr-3" />
                        Zobrazit kurzy
                    </x-button-primary>
                    
                    <x-button-white href="#o-nas" size="lg">
                        <x-hugeicons-information-circle class="w-5 h-5 mr-3" />
                        Více o nás
                    </x-button-white>
                </div>

                <!-- Statistics -->
                <div class="grid grid-cols-3 gap-6 pt-8 border-t border-paynes-gray/20">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-delft-blue mb-1">2500+</div>
                        <div class="text-brand-text text-sm">Absolventů</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-delft-blue mb-1">15+</div>
                        <div class="text-brand-text text-sm">Let zkušeností</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-delft-blue mb-1">98%</div>
                        <div class="text-brand-text text-sm">Spokojenost</div>
                    </div>
                </div>
            </div>

            <!-- Visual Card Column -->
            <div class="lg:order-last">
                <!-- Main Event Card -->
                <div class="bg-white border border-paynes-gray rounded-xl p-6 space-y-6">
                    <!-- Kategorie -->
                    <div class="inline-flex items-center px-3 py-1 bg-delft-blue/10 text-delft-blue text-sm font-medium rounded-xl">
                        Nadcházející událost
                    </div>
                    
                    <!-- Card Header -->
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 bg-moonstone/20 rounded-xl flex items-center justify-center">
                            <x-hugeicons-calendar-03 class="w-6 h-6 text-moonstone" />
                        </div>
                        <div>
                            <p class="text-brand-text font-medium text-sm">15. února 2024 • 9:00-17:00</p>
                        </div>
                    </div>

                    <!-- Card Content -->
                    <div class="space-y-4">
                        <h3 class="text-xl font-bold text-delft-blue leading-tight">
                            Veřejné zakázky v praxi: Novinky v legislativě 2024
                        </h3>
                        
                        <p class="text-brand-text leading-relaxed">
                            Komplexní přehled aktuálních změn v zákoně o veřejných zakázkách 
                            s praktickými příklady a řešením nejčastějších problémů.
                        </p>

                        <!-- Detaily kurzu -->
                        <div class="space-y-3">
                            <!-- Datum a čas -->
                            <div class="flex items-center text-brand-text">
                                <x-hugeicons-calendar-03 class="w-4 h-4 text-moonstone mr-3 flex-shrink-0"/>
                                <span class="font-medium">15. února 2024</span>
                                <span class="mx-2 text-paynes-gray">•</span>
                                <span>9:00-17:00</span>
                            </div>
                            
                            <!-- Lektor -->
                            <div class="flex items-center text-brand-text">
                                <x-hugeicons-user class="w-4 h-4 text-moonstone mr-3 flex-shrink-0"/>
                                <span>JUDr. Jana Nováková</span>
                            </div>
                            
                            <!-- Cena -->
                            <div class="flex items-center">
                                <x-hugeicons-money-01 class="w-4 h-4 text-moonstone mr-3 flex-shrink-0"/>
                                <span class="text-xl font-bold text-delft-blue">4 500 Kč</span>
                            </div>
                        </div>

                        <!-- CTA tlačítko -->
                        <x-button-primary href="#kurzy" class="w-full">
                            Přihlásit se
                            <x-hugeicons-arrow-right-01 class="w-4 h-4 ml-2"/>
                        </x-button-primary>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
