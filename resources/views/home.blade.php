@extends('layouts.app')

@section('content')
  <!-- Hero Section -->
  <section class="bg-white py-20 lg:py-32" aria-labelledby="hero-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <header>
          <h1 id="hero-heading" class="text-4xl lg:text-6xl font-bold text-delft-blue leading-tight mb-6">
            Odborné vzdělávání v právu a veřejné správě
          </h1>
          <p class="text-xl text-gray-75 leading-relaxed mb-8">
            Specializované kurzy a konzultace pro právníky, úředníky a profesionály z oblasti veřejných zakázek. Získejte
            aktuální znalosti od odborníků s praxí.
          </p>
          <nav class="flex flex-col sm:flex-row gap-4 justify-center" aria-label="Hlavní akce">
            <x-button variant="default" size="lg" class="text-lg font-semibold"
              aria-describedby="hero-cta-primary-desc">
              <a href="#kurzy" class="flex items-center justify-center w-full h-full">
                Zobrazit kurzy
              </a>
              <span id="hero-cta-primary-desc" class="sr-only">Přejít na seznam dostupných kurzů a vzdělávacích
                programů</span>
            </x-button>
            <x-button variant="outline" size="lg" class="text-lg font-semibold"
              aria-describedby="hero-cta-secondary-desc">
              <a href="#kontakt" class="flex items-center justify-center w-full h-full">
                Kontaktujte nás
              </a>
              <span id="hero-cta-secondary-desc" class="sr-only">Získat více informací nebo se zeptat na konkrétní
                kurz</span>
            </x-button>
          </nav>
          <div class="sr-only">
            <span id="kurzy-desc">Přejít na sekci s nabídkou kurzů</span>
            <span id="kontakt-desc">Přejít na kontaktní formulář pro bezplatnou konzultaci</span>
          </div>
        </header>
        <div class="flex justify-center" role="img" aria-label="POMETLAW logo symbol">
          <img src="/img/symbol/barevny/symbol.svg" alt="POMETLAW Symbol - stylizované logo společnosti"
            class="w-64 h-64 lg:w-80 lg:h-80">
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section id="kurzy" class="py-20 bg-gray-5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl lg:text-4xl font-bold text-delft-blue mb-6">
          Naše kurzy a služby
        </h2>
        <p class="text-xl text-gray-75 max-w-3xl mx-auto leading-relaxed">
          Poskytujeme komplexní vzdělávání v oblasti práva, veřejné správy a legislativy s důrazem na praktické aplikace a
          aktuální právní úpravu.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Course Card 1 -->
        <x-course-card 
          :icon="'<x-lucide-scale class=\"h-12 w-12 text-delft-blue mb-4\" />'"
          title="Veřejné zakázky"
          description="Komplexní kurz zaměřený na zákon o veřejných zakázkách, praktické postupy a nejčastější chyby při zadávání."
          date="15. února 2024"
          duration="8 hodin"
          location="Praha / Online"
          href="#kontakt"
        />

        <!-- Course Card 2 -->
        <x-course-card 
          :icon="'<x-lucide-building class=\"h-12 w-12 text-delft-blue mb-4\" />'"
          title="Správní právo"
          description="Aktuální trendy ve správním právu, správní řízení a nejnovější judikatura správních soudů."
          date="22. února 2024"
          duration="6 hodin"
          location="Praha / Online"
          href="#kontakt"
        />

        <!-- Course Card 3 -->
        <x-course-card 
          :icon="'<x-lucide-shield-check class=\"h-12 w-12 text-delft-blue mb-4\" />'"
          title="GDPR a ochrana dat"
          description="Praktické aspekty implementace GDPR, zpracování osobních údajů a compliance v organizacích."
          date="1. března 2024"
          duration="4 hodiny"
          location="Online"
          href="#kontakt"
        />
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        <div>
          <h2 class="text-3xl font-bold text-delft-blue mb-8">O společnosti POMETLAW</h2>
          <p class="text-lg text-gray-75 mb-8 leading-relaxed">
            POMETLAW je přední vzdělávací a poradenská společnost specializující se na právo, veřejné zakázky a legislativu. 
            Naše mise je poskytovat kvalitní a praktické vzdělávání, které pomáhá profesionálům orientovat se v komplexním 
            právním prostředí.
          </p>
          <p class="text-lg text-gray-75 mb-10 leading-relaxed">
            S více než desetiletou zkušeností v oboru nabízíme kurzy, které kombinují teoretické znalosti s praktickými 
            dovednostmi potřebnými pro úspěch v dnešním dynamickém právním prostředí.
          </p>
          <x-button variant="secondary" href="#kontakt">
            Kontaktujte nás
          </x-button>
        </div>
        <div class="lg:pl-8">
          <img src="/img/about-image.jpg" alt="O společnosti POMETLAW" 
               class="w-full h-auto rounded-none border border-gray-30">
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="py-20 bg-gray-5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl font-bold text-delft-blue mb-4">Co říkají naši klienti</h2>
        <p class="text-xl text-gray-75">Důvěra našich klientů je pro nás nejdůležitější</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Testimonial 1 -->
        <x-testimonial-card 
          quote="Kurz veřejných zakázek byl velmi prakticky zaměřený. Získal jsem cenné poznatky, které okamžitě využívám v praxi. Doporučuji všem kolegům."
          author="Jan Novák"
          position="Právník"
          company="Městský úřad Praha"
        />

        <!-- Testimonial 2 -->
        <x-testimonial-card 
          quote="Profesionální přístup, aktuální informace a skvělá organizace. POMETLAW je pro mě první volbou pro další vzdělávání."
          author="Marie Kratochvílová"
          position="Vedoucí právního oddělení"
        />

        <!-- Testimonial 3 -->
        <x-testimonial-card 
          quote="Díky kurzům GDPR jsme úspěšně implementovali všechny požadované procesy. Lektoři byli velmi kompetentní a ochotní."
          author="Petr Veselý"
          position="IT Manager"
          company="soukromá firma"
        />
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl font-bold text-delft-blue mb-4">Kontaktujte nás</h2>
        <p class="text-xl text-gray-75">Máte dotaz nebo zájem o naše služby? Rádi vám pomůžeme</p>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <!-- Contact Information -->
        <div>
          <p class="text-lg text-gray-75 leading-relaxed mb-8">
            Máte zájem o naše kurzy nebo potřebujete konzultaci? Rádi vám pomůžeme najít nejvhodnější řešení pro vaše
            vzdělávací potřeby.
          </p>

          <div class="space-y-6">
            <div class="flex items-start">
              <x-lucide-map-pin class="h-6 w-6 text-delft-blue mr-4 mt-1 flex-shrink-0" />
              <div>
                <h3 class="font-semibold text-delft-blue mb-1">Adresa</h3>
                <p class="text-gray-75">Praha, Česká republika</p>
              </div>
            </div>

            <div class="flex items-start">
              <x-lucide-mail class="h-6 w-6 text-delft-blue mr-4 mt-1 flex-shrink-0" />
              <div>
                <h3 class="font-semibold text-delft-blue mb-1">Email</h3>
                <p class="text-gray-75">info@pometlaw.cz</p>
              </div>
            </div>

            <div class="flex items-start">
              <x-lucide-phone class="h-6 w-6 text-delft-blue mr-4 mt-1 flex-shrink-0" />
              <div>
                <h3 class="font-semibold text-delft-blue mb-1">Telefon</h3>
                <p class="text-gray-75">+420 123 456 789</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="bg-gray-5 p-8 rounded-none">
          <h3 class="text-2xl font-bold text-delft-blue mb-6">
            Napište nám
          </h3>

          <x-form class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div>
                <x-form.label for="first_name" class="text-gray-75 mb-2">
                  Jméno *
                </x-form.label>
                <x-input type="text" id="first_name" name="first_name" required placeholder="Vaše jméno" />
              </div>
              <div>
                <x-form.label for="last_name" class="text-gray-75 mb-2">
                  Příjmení *
                </x-form.label>
                <x-input type="text" id="last_name" name="last_name" required placeholder="Vaše příjmení" />
              </div>
            </div>

            <div>
              <x-form.label for="email" class="text-gray-75 mb-2">
                Email *
              </x-form.label>
              <x-input type="email" id="email" name="email" required placeholder="vas@email.cz" />
            </div>

            <div>
              <x-form.label for="phone" class="text-gray-75 mb-2">
                Telefon
              </x-form.label>
              <x-input type="tel" id="phone" name="phone" placeholder="+420 123 456 789" />
            </div>

            <div>
              <x-form.label for="subject" class="text-gray-75 mb-2">
                Předmět *
              </x-form.label>
              <x-select id="subject" name="subject" required>
                <option value="">Vyberte předmět</option>
                <option value="kurz">Zájem o kurz</option>
                <option value="konzultace">Konzultace</option>
                <option value="spoluprace">Spolupráce</option>
                <option value="jine">Jiné</option>
              </x-select>
            </div>

            <div>
              <x-form.label for="message" class="text-gray-75 mb-2">
                Zpráva *
              </x-form.label>
              <x-input type="textarea" id="message" name="message" rows="4" required placeholder="Popište nám váš dotaz nebo požadavek..." />
            </div>

            <x-button type="submit" variant="default" size="lg" class="w-full font-semibold">
              Odeslat zprávu
            </x-button>
          </x-form>
        </div>
      </div>
    </div>
  </section>

  <!-- Final CTA Section -->
  <section class="py-20 bg-delft-blue">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <h2 class="text-3xl font-bold text-white mb-8">
        Připraveni rozšířit své znalosti?
      </h2>
      <p class="text-xl text-white mb-10">
        Přihlaste se k našim kurzům a získejte praktické dovednosti, které potřebujete pro úspěch
      </p>
      <x-button variant="secondary" href="#kurzy">
        Zobrazit všechny kurzy
      </x-button>
    </div>
  </section>
@endsection
