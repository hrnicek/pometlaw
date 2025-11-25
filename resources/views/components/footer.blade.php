<footer class="bg-zinc-50 text-zinc-600 py-16 border-t border-zinc-200">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            {{-- Brand & Mission --}}
            <div class="lg:col-span-4 space-y-6">
                <a href="{{ route('home') }}" class="inline-block">
                    <img src="{{ asset('img/logo.svg') }}" alt="Pometlaw" class="h-16 w-auto">
                </a>
                <p class="text-zinc-500 leading-relaxed max-w-sm">
                    Inovativní přístup k modernizaci veřejných zakázek.
                    Odstraňujeme zbytečné složitosti a přinášíme jednoduchost a transparentnost do světa paragrafů.
                </p>
                <div class="flex items-center gap-4">
                    {{-- Social Links (Placeholders) --}}
                    <a href="#" class="text-zinc-400 hover:text-delft-blue transition-colors">
                        <span class="sr-only">LinkedIn</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                </div>
            </div>

            {{-- Quick Links --}}
            <div class="lg:col-span-2 lg:col-start-6">
                <h3 class="font-semibold text-zinc-900 mb-6">Navigace</h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('home') }}" class="hover:text-delft-blue transition-colors">Domů</a></li>
                    <li><a href="{{ route('events.index') }}" class="hover:text-delft-blue transition-colors">Školení</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-delft-blue transition-colors">Kontakt</a></li>
                    <li><a href="{{ route('faq') }}" class="hover:text-delft-blue transition-colors">Časté dotazy</a></li>
                </ul>
            </div>

            {{-- Company Details --}}
            <div class="lg:col-span-4 lg:col-start-9">
                <h3 class="font-semibold text-zinc-900 mb-6">Fakturační údaje</h3>
                <div class="space-y-4 text-sm">
                    <div>
                        <strong class="block text-zinc-900">pometlaw s.r.o.</strong>
                        <span>Moravské náměstí 127/3</span><br>
                        <span>602 00 Brno-město</span>
                    </div>
                    <div class="grid grid-cols-2 gap-x-4 gap-y-2">
                        <div>
                            <span class="text-zinc-400">IČO:</span>
                            <span class="text-zinc-900 ml-1">21333092</span>
                        </div>
                        <div>
                            <span class="text-zinc-400">Datová schránka:</span>
                            <span class="text-zinc-900 ml-1">2nzw4yj</span>
                        </div>
                        <div>
                            <span class="text-zinc-400">Zápis v OR:</span>
                            <span class="text-zinc-900 ml-1">C 138676/KSBR</span>
                        </div>
                        <div>
                            <span class="text-zinc-400">Základní kapitál:</span>
                            <span class="text-zinc-900 ml-1">30 000 Kč</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- Bottom Bar --}}
        <div class="border-t border-zinc-200 mt-16 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-zinc-400">
            <p>&copy; {{ date('Y') }} pometlaw s.r.o. Všechna práva vyhrazena.</p>
            <div class="flex gap-6">
                <a href="#" class="hover:text-zinc-600 transition-colors">Obchodní podmínky</a>
                <a href="#" class="hover:text-zinc-600 transition-colors">Ochrana soukromí</a>
            </div>
        </div>
    </div>
</footer>