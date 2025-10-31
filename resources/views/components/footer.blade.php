<section class="py-32">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <footer>
      <div class="grid grid-cols-2 gap-8 lg:grid-cols-6">
        <div class="col-span-2 mb-8 lg:mb-0">
          <div class="flex items-center gap-2 lg:justify-start">
            <img
              src="{{ asset('img/logo/Primární logo : Barevné/logo.svg') }}"
              class="max-h-8 dark:invert"
              alt="Pometlaw Logo"
            />
            <span class="text-lg font-semibold tracking-tighter">
              Pometlaw
            </span>
          </div>
          <p class="mt-4 font-bold">Vymetáme zastaralé postupy v oblasti veřejných zakázek.</p>
        </div>
        <div>
          <h3 class="mb-4 font-bold">Produkt</h3>
          <ul class="text-muted-foreground space-y-4">
            <li class="hover:text-primary font-medium">
              <a href="{{ route('events.index') }}">Školení</a>
            </li>
            <li class="hover:text-primary font-medium">
              <a href="{{ route('about') }}">O nás</a>
            </li>
            <li class="hover:text-primary font-medium">
              <a href="#">Konzultace</a>
            </li>
            <li class="hover:text-primary font-medium">
              <a href="#">Audit procesů</a>
            </li>
            <li class="hover:text-primary font-medium">
              <a href="#">Integrace</a>
            </li>
            <li class="hover:text-primary font-medium">
              <a href="#">Pricing</a>
            </li>
          </ul>
        </div>
        <div>
          <h3 class="mb-4 font-bold">Společnost</h3>
          <ul class="text-muted-foreground space-y-4">
            <li class="hover:text-primary font-medium">
              <a href="{{ route('about') }}">O nás</a>
            </li>
            <li class="hover:text-primary font-medium">
              <a href="#">Tým</a>
            </li>
            <li class="hover:text-primary font-medium">
              <a href="#">Blog</a>
            </li>
            <li class="hover:text-primary font-medium">
              <a href="#">Kariéra</a>
            </li>
            <li class="hover:text-primary font-medium">
              <a href="{{ route('contact') }}">Kontakt</a>
            </li>
            <li class="hover:text-primary font-medium">
              <a href="#">Privacy</a>
            </li>
          </ul>
        </div>
        <div>
          <h3 class="mb-4 font-bold">Zdroje</h3>
          <ul class="text-muted-foreground space-y-4">
            <li class="hover:text-primary font-medium">
              <a href="#">Nápověda</a>
            </li>
            <li class="hover:text-primary font-medium">
              <a href="#">Prodej</a>
            </li>
            <li class="hover:text-primary font-medium">
              <a href="#">Reklama</a>
            </li>
          </ul>
        </div>
        <div>
          <h3 class="mb-4 font-bold">Sociální sítě</h3>
          <ul class="text-muted-foreground space-y-4">
            <li class="hover:text-primary font-medium">
              <a href="#">Twitter</a>
            </li>
            <li class="hover:text-primary font-medium">
              <a href="#">Instagram</a>
            </li>
            <li class="hover:text-primary font-medium">
              <a href="#">LinkedIn</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="text-gray-50 mt-24 flex flex-col justify-between gap-4 border-t border-gray-20 pt-8 text-sm font-medium md:flex-row md:items-center">
        <p>© {{ date('Y') }} Pometlaw. Všechna práva vyhrazena.</p>
        <ul class="flex gap-4">
          <li class="hover:text-primary underline">
            <a href="{{ route('terms') }}">Podmínky a pravidla</a>
          </li>
          <li class="hover:text-primary underline">
            <a href="{{ route('privacy') }}">Ochrana osobních údajů</a>
          </li>
        </ul>
      </div>
    </footer>
  </div>
</section>