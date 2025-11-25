<section class="py-20 lg:py-32 bg-gray-5 relative overflow-hidden">
    
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-moonstone/5 rounded-full blur-3xl -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-paynes-gray/5 rounded-full blur-3xl translate-y-1/2"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        
        <div class="text-center mb-16 max-w-3xl mx-auto">
            <div class="inline-flex items-center justify-center mb-4">
                <div class="h-px w-8 bg-moonstone mr-4"></div>
                <span class="text-paynes-gray font-medium tracking-wide uppercase text-sm">Co nabízíme</span>
                <div class="h-px w-8 bg-moonstone ml-4"></div>
            </div>
            
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-heading text-delft-blue mb-6">
                Naše služby
            </h2>
            <p class="text-xl text-gray-50 leading-relaxed">
                Komplexní řešení pro modernizaci veřejných zakázek. <br class="hidden md:block">
                Od vzdělávání přes poradenství až po kompletní administrativu.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 lg:gap-8">

            <div class="group bg-white rounded-3xl p-8 border border-gray-20 hover:border-moonstone transition-all duration-300 hover:shadow-xl hover:shadow-moonstone/10 hover:-translate-y-2 flex flex-col h-full">
                <div class="w-16 h-16 rounded-2xl bg-moonstone/10 text-moonstone group-hover:bg-moonstone group-hover:text-white flex items-center justify-center mb-8 transition-colors duration-300">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                
                <h3 class="text-2xl font-heading text-delft-blue mb-4">Vzdělávání</h3>
                <p class="text-gray-50 mb-8 flex-grow leading-relaxed">
                    Školení, webináře a workshopy zaměřené na moderní praxi. Učíme vás rybařit, ne jen dávat ryby.
                </p>
                
                <a href="{{ route('events.index') }}" class="inline-flex items-center font-medium text-delft-blue group-hover:text-moonstone transition-colors">
                    Zobrazit kurzy
                    <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>

            <div class="group bg-white rounded-3xl p-8 border border-gray-20 hover:border-delft-blue transition-all duration-300 hover:shadow-xl hover:shadow-delft-blue/10 hover:-translate-y-2 flex flex-col h-full">
                <div class="w-16 h-16 rounded-2xl bg-delft-blue/10 text-delft-blue group-hover:bg-delft-blue group-hover:text-white flex items-center justify-center mb-8 transition-colors duration-300">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                
                <h3 class="text-2xl font-heading text-delft-blue mb-4">Poradenství</h3>
                <p class="text-gray-50 mb-8 flex-grow leading-relaxed">
                    Konzultace konkrétních případů. Když si nevíte rady, jsme váš přítel na telefonu s právním vzděláním.
                </p>
                
                <a href="{{ route('contact') }}" class="inline-flex items-center font-medium text-delft-blue group-hover:text-moonstone transition-colors">
                    Kontaktovat
                    <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>

            <div class="group bg-white rounded-3xl p-8 border border-gray-20 hover:border-paynes-gray transition-all duration-300 hover:shadow-xl hover:shadow-paynes-gray/10 hover:-translate-y-2 flex flex-col h-full">
                <div class="w-16 h-16 rounded-2xl bg-paynes-gray/10 text-paynes-gray group-hover:bg-paynes-gray group-hover:text-white flex items-center justify-center mb-8 transition-colors duration-300">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                
                <h3 class="text-2xl font-heading text-delft-blue mb-4">Administrativa</h3>
                <p class="text-gray-50 mb-8 flex-grow leading-relaxed">
                    Outsourcing agendy. Nechte papírování na nás a věnujte se tomu, co je pro vaši obec či firmu důležité.
                </p>
                
                <a href="{{ route('contact') }}" class="inline-flex items-center font-medium text-delft-blue group-hover:text-moonstone transition-colors">
                    Domluvit se
                    <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>

            <div class="group bg-white rounded-3xl p-8 border border-gray-20 hover:border-delft-blue transition-all duration-300 hover:shadow-xl hover:shadow-delft-blue/10 hover:-translate-y-2 flex flex-col h-full">
                <div class="w-16 h-16 rounded-2xl bg-gray-10 text-gray-75 group-hover:bg-delft-blue group-hover:text-white flex items-center justify-center mb-8 transition-colors duration-300">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                
                <h3 class="text-2xl font-heading text-delft-blue mb-4">Publikace</h3>
                <p class="text-gray-50 mb-8 flex-grow leading-relaxed">
                    Manuály a e-booky. Složité zákony přeložené do lidské řeči. Srozumitelně, stručně, prakticky.
                </p>
                
                <a href="#" class="inline-flex items-center font-medium text-delft-blue group-hover:text-moonstone transition-colors">
                    Procházet
                    <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>