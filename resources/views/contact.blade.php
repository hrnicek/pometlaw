@extends('layouts.app')

@section('content')
<x-page-header title="Kontaktujte nás" description="Dejte nám čistý stůl. Odpovíme vám do 24 hodin.">
  Kontakt
</x-page-header>

<section class="py-20 bg-white">
  <div class="container mx-auto px-4">
    <div class="max-w-5xl mx-auto">

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
        <!-- Contact Info -->
        <div class="space-y-10">
          <div>
            <h3 class="text-2xl font-bold text-zinc-900 mb-4">Náš tým je tu pro vás</h3>
            <p class="text-zinc-500 leading-relaxed">
              Máme zkušenosti s veřejnými zakázkami a rádi vám pomůžeme vyřešit vaše konkrétní potřeby.
              Ať už potřebujete školení nebo konzultaci, jsme tu pro vás.
            </p>
          </div>

          <div class="space-y-8">
            <div class="flex items-start gap-6">
              <div class="w-12 h-12 bg-zinc-50 rounded-xl flex items-center justify-center flex-shrink-0 text-delft-blue">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
              </div>
              <div>
                <h4 class="font-semibold text-zinc-900 mb-1">E-mail</h4>
                <a href="mailto:info@pometlaw.cz" class="text-delft-blue hover:text-delft-blue/80 transition-colors">info@pometlaw.cz</a>
              </div>
            </div>

            <div class="flex items-start gap-6">
              <div class="w-12 h-12 bg-zinc-50 rounded-xl flex items-center justify-center flex-shrink-0 text-delft-blue">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
              </div>
              <div>
                <h4 class="font-semibold text-zinc-900 mb-1">Telefon</h4>
                <a href="tel:+420123456789" class="text-delft-blue hover:text-delft-blue/80 transition-colors">+420 123 456 789</a>
              </div>
            </div>

            <div class="flex items-start gap-6">
              <div class="w-12 h-12 bg-zinc-50 rounded-xl flex items-center justify-center flex-shrink-0 text-delft-blue">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
              </div>
              <div>
                <h4 class="font-semibold text-zinc-900 mb-1">Sídlo společnosti</h4>
                <p class="text-zinc-500">
                    Moravské náměstí 127/3<br>
                    602 00 Brno-město
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="bg-white p-8 rounded-3xl border border-zinc-100 shadow-sm">
          <form action="#" method="POST" class="space-y-6">
            @csrf
            <div>
              <label for="name" class="block text-sm font-medium text-zinc-700 mb-2">Jméno a příjmení *</label>
              <input type="text" id="name" name="name" required
                     class="w-full px-4 py-3 bg-zinc-50 border border-zinc-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-delft-blue/20 focus:border-delft-blue transition-all">
            </div>

            <div>
              <label for="email" class="block text-sm font-medium text-zinc-700 mb-2">E-mail *</label>
              <input type="email" id="email" name="email" required
                     class="w-full px-4 py-3 bg-zinc-50 border border-zinc-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-delft-blue/20 focus:border-delft-blue transition-all">
            </div>

            <div>
              <label for="phone" class="block text-sm font-medium text-zinc-700 mb-2">Telefon</label>
              <input type="tel" id="phone" name="phone"
                     class="w-full px-4 py-3 bg-zinc-50 border border-zinc-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-delft-blue/20 focus:border-delft-blue transition-all">
            </div>

            <div>
              <label for="message" class="block text-sm font-medium text-zinc-700 mb-2">Zpráva *</label>
              <textarea id="message" name="message" rows="5" required
                        class="w-full px-4 py-3 bg-zinc-50 border border-zinc-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-delft-blue/20 focus:border-delft-blue transition-all resize-none"></textarea>
            </div>

            <button type="submit" 
                    class="w-full py-4 px-6 bg-delft-blue text-white font-medium rounded-xl hover:bg-delft-blue/90 transition-colors shadow-lg shadow-delft-blue/20">
              Odeslat zprávu
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
