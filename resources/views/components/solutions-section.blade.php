<section class="p-4 bg-white md:p-8">
  <div class="rounded-3xl bg-delft-blue pt-16 pb-24 px-6 xs:px-10 xl:px-16 overflow-hidden relative shadow-xl">
    
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-paynes-gray opacity-10 blur-3xl rounded-full -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>

    <div class="container mx-auto relative z-10">
      
      <div class="flex items-center mb-6 space-x-3">
        <div class="flex items-center justify-center w-2 h-2 rounded-full bg-moonstone shadow-[0_0_8px_rgba(101,153,155,1)]"></div>
        <span class="text-xs font-bold tracking-widest text-moonstone uppercase">Naše řešení</span>
      </div>

      <div class="border-t border-white/10 pt-10 mb-16">
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-8">
          <h2 class="text-white tracking-tight max-w-3xl">
            Pro koho <span class="text-moonstone">vymetáme</span> <br>byrokracii?
          </h2>
          <p class="text-lg text-white/70 max-w-xl leading-relaxed">
            Veřejné zakázky mají svá pravidla. My je známe, zjednodušujeme a předáváme dál.
          </p>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
        
        <a href="{{ route('events.index') }}" class="group relative flex flex-col h-full p-8 rounded-2xl border border-white/10 bg-white/[0.02] hover:bg-delft-blue hover:border-moonstone transition-all duration-300 shadow-sm">
          
          <div class="mb-8 inline-flex items-center justify-center w-14 h-14 rounded-xl bg-white/5 border border-white/5 text-white group-hover:text-moonstone group-hover:bg-moonstone/10 group-hover:border-moonstone/20 transition-all duration-300">
            <svg class="w-7 h-7 fill-current" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 8C0 3.58172 3.58172 0 8 0H40C44.4183 0 48 3.58172 48 8V40C48 44.4183 44.4183 48 40 48H8C3.58172 48 0 44.4183 0 40V8Z" class="opacity-30"/> 
                <path d="M16 15C16 12.2386 18.2386 10 21 10H27C29.7614 10 32 12.2386 32 15V16H34C35.1046 16 36 16.8954 36 18V34C36 36.2091 34.2091 38 32 38H16C13.7909 38 12 36.2091 12 34V18C12 16.8954 12.8954 16 14 16H16V15ZM18 16H30V15C30 13.3431 28.6569 12 27 12H21C19.3431 12 18 13.3431 18 15V16ZM14 18V34C14 35.1046 14.8954 36 16 36H32C33.1046 36 34 35.1046 34 34V18H14Z" />
            </svg>
          </div>

          <h3 class="text-2xl font-medium text-white mb-4 group-hover:text-moonstone transition-colors">Veřejná správa</h3>
          <p class="text-white/60 text-base leading-relaxed mb-10 flex-grow">
            Starostové a vedoucí odborů. Zbavíme vás strachu z procesních chyb a naučíme vás vypisovat zakázky efektivně.
          </p>

          <div class="flex items-center text-white/40 font-medium text-sm mt-auto group-hover:text-moonstone transition-colors">
            <span class="mr-2">Více informací</span>
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
          </div>
        </a>

        <a href="{{ route('events.index') }}" class="group relative flex flex-col h-full p-8 rounded-2xl border border-white/10 bg-white/[0.02] hover:bg-delft-blue hover:border-moonstone transition-all duration-300 shadow-sm">
          
          <div class="mb-8 inline-flex items-center justify-center w-14 h-14 rounded-xl bg-white/5 border border-white/5 text-white group-hover:text-moonstone group-hover:bg-moonstone/10 group-hover:border-moonstone/20 transition-all duration-300">
             <svg class="w-7 h-7 fill-current" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 8C0 3.58172 3.58172 0 8 0H40C44.4183 0 48 3.58172 48 8V40C48 44.4183 44.4183 48 40 48H8C3.58172 48 0 44.4183 0 40V8Z" class="opacity-30"/>
                <path d="M24 14C18.4772 14 14 18.4772 14 24C14 29.5228 18.4772 34 24 34C29.5228 34 34 29.5228 34 24C34 18.4772 29.5228 14 24 14ZM24 16C28.4183 16 32 19.5817 32 24C32 26.1256 31.1571 28.0513 29.7852 29.4648L18.5352 18.2148C19.9487 16.8429 21.8744 16 24 16ZM18.2148 18.5352L29.4648 29.7852C28.0513 31.1571 26.1256 32 24 32C19.5817 32 16 28.4183 16 24C16 21.8744 16.8429 19.9487 18.2148 18.5352Z" />
             </svg>
          </div>

          <h3 class="text-2xl font-medium text-white mb-4 group-hover:text-moonstone transition-colors">Administrativa</h3>
          <p class="text-white/60 text-base leading-relaxed mb-10 flex-grow">
            Administrativní pracovníci. Dáme vám jasné nástroje a postupy, jak procesovat zakázky bez zbytečného papírování navíc.
          </p>

          <div class="flex items-center text-white/40 font-medium text-sm mt-auto group-hover:text-moonstone transition-colors">
            <span class="mr-2">Více informací</span>
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
          </div>
        </a>

        <a href="{{ route('events.index') }}" class="group relative flex flex-col h-full p-8 rounded-2xl border border-white/10 bg-white/[0.02] hover:bg-delft-blue hover:border-moonstone transition-all duration-300 shadow-sm">
          
          <div class="mb-8 inline-flex items-center justify-center w-14 h-14 rounded-xl bg-white/5 border border-white/5 text-white group-hover:text-moonstone group-hover:bg-moonstone/10 group-hover:border-moonstone/20 transition-all duration-300">
             <svg class="w-7 h-7 fill-current" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 8C0 3.58172 3.58172 0 8 0H40C44.4183 0 48 3.58172 48 8V40C48 44.4183 44.4183 48 40 48H8C3.58172 48 0 44.4183 0 40V8Z" class="opacity-30"/>
                <path d="M24 12L26.4721 20.7639H35.6085L28.0682 26.2361L30.5403 35L24 29.5279L17.4597 35L19.9318 26.2361L12.3915 20.7639H21.5279L24 12Z" />
             </svg>
          </div>

          <h3 class="text-2xl font-medium text-white mb-4 group-hover:text-moonstone transition-colors">Podnikatelé</h3>
          <p class="text-white/60 text-base leading-relaxed mb-10 flex-grow">
            Firmy a dodavatelé. Zprůhledníme vám systém, abyste se mohli soustředit na podávání vítězných nabídek, ne na byrokracii.
          </p>

          <div class="flex items-center text-white/40 font-medium text-sm mt-auto group-hover:text-moonstone transition-colors">
            <span class="mr-2">Více informací</span>
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
          </div>
        </a>

      </div>
    </div>
  </div>
</section>
