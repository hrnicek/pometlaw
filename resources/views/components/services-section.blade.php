<section class="py-20 lg:py-32 bg-gray-5">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-6xl font-bold text-gray-75 mb-6">
                Naše služby
            </h2>
            <p class="text-xl md:text-2xl text-gray-50 max-w-3xl mx-auto">
                Komplexní řešení pro modernizaci veřejných zakázek a administrativních procesů
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="bg-white rounded border border-gray-20 p-8 text-center">
                <div class="w-20 h-20 bg-delft-blue rounded flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-semibold text-gray-75 mb-4">Vzdělávání</h3>
                <p class="text-gray-50 mb-6">Školení, webináře a workshopy zaměřené na moderní praxi veřejných zakázek.</p>
                <a href="{{ route('events.index') }}"
                   class="inline-flex items-center px-6 py-3 bg-delft-blue text-white font-medium rounded">
                    Zobrazit kurzy
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>

            <div class="bg-white rounded border border-gray-20 p-8 text-center">
                <div class="w-20 h-20 bg-moonstone rounded flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-semibold text-gray-75 mb-4">Poradenství</h3>
                <p class="text-gray-50 mb-6">Konzultace konkrétních případů a optimalizace procesů veřejných zakázek.</p>
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center px-6 py-3 bg-delft-blue text-white font-medium rounded">
                    Kontaktovat
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>

            <div class="bg-white rounded border border-gray-20 p-8 text-center">
                <div class="w-20 h-20 bg-paynes-gray rounded flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-semibold text-gray-75 mb-4">Administrativa</h3>
                <p class="text-gray-50 mb-6">Outsourcing agendy veřejných zakázek – ušetříte čas i starosti s papírováním.</p>
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center px-6 py-3 bg-delft-blue text-white font-medium rounded">
                    Domluvit se
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>

            <div class="bg-white rounded border border-gray-20 p-8 text-center">
                <div class="w-20 h-20 bg-delft-blue rounded flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-semibold text-gray-75 mb-4">Publikace</h3>
                <p class="text-gray-50 mb-6">Srozumitelné manuály, e-booky a články o veřejných zakázkách psané lidskou řečí.</p>
                <a href="#"
                   class="inline-flex items-center px-6 py-3 bg-delft-blue text-white font-medium rounded">
                    Procházet
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>