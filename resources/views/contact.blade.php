@extends('layouts.app')

@section('content')
<x-page-header title="Kontaktujte nás" description="Dejte nám čistý stůl. Odpovíme vám do 24 hodin.">
  Kontakt
</x-page-header>

<div class="bg-gray-5 min-h-screen">
    
    <section class="pt-20 pb-12 text-center px-4">
        <div class="max-w-3xl mx-auto">
            <div class="inline-flex items-center justify-center mb-4">
                <div class="h-px w-8 bg-moonstone mr-4"></div>
                <span class="text-paynes-gray font-medium tracking-wide uppercase text-sm">Kontakt</span>
                <div class="h-px w-8 bg-moonstone ml-4"></div>
            </div>
            <h1 class="text-4xl md:text-6xl font-heading text-delft-blue mb-6">
                Dejte nám <span class="text-moonstone">čistý stůl.</span>
            </h1>
            <p class="text-xl text-gray-50 max-w-2xl mx-auto leading-relaxed">
                Máte dotaz k veřejným zakázkám? Potřebujete poradit nebo vyškolit tým? 
                Ozvěte se nám, odpovídáme do 24 hodin.
            </p>
        </div>
    </section>

    <section class="pb-24 px-4">
        <div class="container mx-auto max-w-6xl">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16 items-start">

                <div class="lg:col-span-5 space-y-8">
                    
                    <div class="bg-white rounded-3xl p-8 border border-gray-20 shadow-sm">
                        <h3 class="text-2xl font-heading text-delft-blue mb-8">Kde nás najdete</h3>
                        
                        <div class="space-y-8">
                            <div class="flex items-start group">
                                <div class="w-12 h-12 rounded-xl bg-gray-5 text-delft-blue flex items-center justify-center flex-shrink-0 group-hover:bg-delft-blue group-hover:text-white transition-colors duration-300">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div class="ml-5">
                                    <span class="block text-sm font-bold text-gray-50 uppercase tracking-wide mb-1">Sídlo společnosti</span>
                                    <p class="text-lg text-gray-75 font-medium">
                                        Moravské náměstí 127/3<br>
                                        602 00 Brno-město
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start group">
                                <div class="w-12 h-12 rounded-xl bg-gray-5 text-delft-blue flex items-center justify-center flex-shrink-0 group-hover:bg-moonstone group-hover:text-white transition-colors duration-300">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div class="ml-5">
                                    <span class="block text-sm font-bold text-gray-50 uppercase tracking-wide mb-1">Napište nám</span>
                                    <a href="mailto:info@pometlaw.cz" class="text-lg text-delft-blue font-medium hover:text-moonstone transition-colors border-b border-transparent hover:border-moonstone">
                                        info@pometlaw.cz
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="h-px w-full bg-gray-20 my-8"></div>

                        <div>
                            <h4 class="text-lg font-heading text-delft-blue mb-4">Fakturační údaje</h4>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-gray-5 rounded-xl p-4">
                                    <span class="block text-xs text-gray-50 uppercase mb-1">IČO</span>
                                    <span class="font-mono text-gray-75 font-medium">21333092</span>
                                </div>
                                <div class="bg-gray-5 rounded-xl p-4 border border-transparent hover:border-moonstone/50 transition-colors">
                                    <span class="block text-xs text-gray-50 uppercase mb-1">Datová schránka</span>
                                    <span class="font-mono text-delft-blue font-bold">2nzw4yj</span>
                                </div>
                            </div>
                            <p class="mt-4 text-sm text-gray-50">
                                Společnost je zapsána v obchodním rejstříku vedeném Krajským soudem v Brně.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7">
                    <div class="bg-white rounded-3xl p-8 md:p-10 border border-gray-20 shadow-xl shadow-gray-20/50">
                        <form action="#" method="POST" class="space-y-6">
                            @csrf
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label for="name" class="text-sm font-medium text-delft-blue ml-1">Jméno a příjmení</label>
                                    <input type="text" id="name" name="name" required placeholder="Jan Novák"
                                           class="w-full px-5 py-4 bg-gray-5 border-2 border-transparent rounded-xl text-gray-75 placeholder-gray-30 focus:outline-none focus:bg-white focus:border-moonstone transition-all duration-200">
                                </div>

                                <div class="space-y-2">
                                    <label for="phone" class="text-sm font-medium text-delft-blue ml-1">Telefon</label>
                                    <input type="tel" id="phone" name="phone" placeholder="+420 777 000 000"
                                           class="w-full px-5 py-4 bg-gray-5 border-2 border-transparent rounded-xl text-gray-75 placeholder-gray-30 focus:outline-none focus:bg-white focus:border-moonstone transition-all duration-200">
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label for="email" class="text-sm font-medium text-delft-blue ml-1">E-mailová adresa <span class="text-moonstone">*</span></label>
                                <input type="email" id="email" name="email" required placeholder="jan.novak@urad.cz"
                                       class="w-full px-5 py-4 bg-gray-5 border-2 border-transparent rounded-xl text-gray-75 placeholder-gray-30 focus:outline-none focus:bg-white focus:border-moonstone transition-all duration-200">
                            </div>

                            <div class="space-y-2">
                                <label for="message" class="text-sm font-medium text-delft-blue ml-1">S čím potřebujete pomoci?</label>
                                <textarea id="message" name="message" rows="5" required placeholder="Popište nám stručně vaši situaci..."
                                          class="w-full px-5 py-4 bg-gray-5 border-2 border-transparent rounded-xl text-gray-75 placeholder-gray-30 focus:outline-none focus:bg-white focus:border-moonstone transition-all duration-200 resize-none"></textarea>
                            </div>

                            <div class="flex items-start gap-3 py-2">
                                <div class="flex h-6 items-center">
                                    <input id="gdpr" name="gdpr" type="checkbox" required class="h-5 w-5 rounded border-gray-30 text-delft-blue focus:ring-moonstone">
                                </div>
                                <div class="text-sm leading-6">
                                    <label for="gdpr" class="text-gray-50">
                                        Souhlasím se zpracováním osobních údajů pro účely vyřízení poptávky.
                                    </label>
                                </div>
                            </div>

                            <button type="submit" 
                                    class="w-full sm:w-auto px-10 py-4 bg-delft-blue hover:bg-paynes-gray text-white font-medium rounded-xl transition-all duration-200 shadow-lg shadow-delft-blue/20 transform hover:-translate-y-1 flex items-center justify-center">
                                Odeslat zprávu
                                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
@endsection
