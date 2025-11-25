<section class="py-12 lg:py-24">
  <div class="container mx-auto px-4">
    <div class="text-center mb-20">
      <h1 class="font-heading text-6xl mb-6 text-delft-blue">Často kladené otázky</h1>
      <p class="text-gray-50 text-lg">Zde najdete odpovědi na nejčastěji kladené otázky.</p>
    </div>
    <div class="max-w-4xl mx-auto">
      <button class="flex w-full py-6 px-8 mb-4 items-start justify-between text-left shadow-md rounded-2xl bg-white" x-data="{ accordion: false }" x-on:click.prevent="accordion = !accordion">
        <div>
          <div class="pr-5">
            <h5 class="text-lg font-medium text-delft-blue">Co je zelená energie?</h5>
          </div>
          <div class="overflow-hidden h-0 pr-5 duration-500" x-ref="container" :style="accordion ? 'height: ' + $refs.container.scrollHeight + 'px' : ''">
            <p class="text-gray-50 mt-4">Poskytujeme řadu řešení zelené energie, včetně solárních elektráren, větrných turbín, energeticky úsporných spotřebičů a chytrých domácích technologií pro zvýšení udržitelnosti energie.</p>
          </div>
        </div>
        <span class="flex-shrink-0">
          <div :class="{'hidden': accordion}">
            <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 5.69995V18.3" stroke="#2b3756" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M5.69995 12H18.3" stroke="#2b3756" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </div>
          <div class="hidden" :class="{'hidden': !accordion}">
            <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M5.69995 12H18.3" stroke="#2b3756" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </div>
        </span>
      </button>
      <button class="flex w-full py-6 px-8 mb-4 items-start justify-between text-left shadow-md rounded-2xl bg-white" x-data="{ accordion: false }" x-on:click.prevent="accordion = !accordion">
        <div>
          <div class="pr-5">
            <h5 class="text-lg font-medium text-delft-blue">Jak prospívá zelená energie životnímu prostředí?</h5>
          </div>
          <div class="overflow-hidden h-0 pr-5 duration-500" x-ref="container" :style="accordion ? 'height: ' + $refs.container.scrollHeight + 'px' : ''">
            <p class="text-gray-50 mt-4">Poskytujeme řadu řešení zelené energie, včetně solárních elektráren, větrných turbín, energeticky úsporných spotřebičů a chytrých domácích technologií pro zvýšení udržitelnosti energie.</p>
          </div>
        </div>
        <span class="flex-shrink-0">
          <div :class="{'hidden': accordion}">
            <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 5.69995V18.3" stroke="#2b3756" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M5.69995 12H18.3" stroke="#2b3756" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </div>
          <div class="hidden" :class="{'hidden': !accordion}">
            <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M5.69995 12H18.3" stroke="#2b3756" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </div>
        </span>
      </button>
      <button class="flex w-full py-6 px-8 mb-4 items-start justify-between text-left shadow-md rounded-2xl bg-white" x-data="{ accordion: false }" x-on:click.prevent="accordion = !accordion">
        <div>
          <div class="pr-5">
            <h5 class="text-lg font-medium text-delft-blue">Jaká řešení zelené energie nabízí vaše společnost?</h5>
          </div>
          <div class="overflow-hidden h-0 pr-5 duration-500" x-ref="container" :style="accordion ? 'height: ' + $refs.container.scrollHeight + 'px' : ''">
            <p class="text-gray-50 mt-4">Poskytujeme řadu řešení zelené energie, včetně solárních elektráren, větrných turbín, energeticky úsporných spotřebičů a chytrých domácích technologií pro zvýšení udržitelnosti energie.</p>
          </div>
        </div>
        <span class="flex-shrink-0">
          <div :class="{'hidden': accordion}">
            <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 5.69995V18.3" stroke="#2b3756" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M5.69995 12H18.3" stroke="#2b3756" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </div>
          <div class="hidden" :class="{'hidden': !accordion}">
            <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M5.69995 12H18.3" stroke="#2b3756" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </div>
        </span>
      </button>
      <button class="flex w-full py-6 px-8 mb-4 items-start justify-between text-left shadow-md rounded-2xl bg-white" x-data="{ accordion: false }" x-on:click.prevent="accordion = !accordion">
        <div>
          <div class="pr-5">
            <h5 class="text-lg font-medium text-delft-blue">Jakou podporu poskytujete po instalaci řešení zelené energie?</h5>
          </div>
          <div class="overflow-hidden h-0 pr-5 duration-500" x-ref="container" :style="accordion ? 'height: ' + $refs.container.scrollHeight + 'px' : ''">
            <p class="text-gray-50 mt-4">Poskytujeme řadu řešení zelené energie, včetně solárních elektráren, větrných turbín, energeticky úsporných spotřebičů a chytrých domácích technologií pro zvýšení udržitelnosti energie.</p>
          </div>
        </div>
        <span class="flex-shrink-0">
          <div :class="{'hidden': accordion}">
            <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 5.69995V18.3" stroke="#2b3756" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M5.69995 12H18.3" stroke="#2b3756" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </div>
          <div class="hidden" :class="{'hidden': !accordion}">
            <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M5.69995 12H18.3" stroke="#2b3756" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </div>
        </span>
      </button>
      <button class="flex w-full py-6 px-8 mb-24 items-start justify-between text-left shadow-md rounded-2xl bg-white" x-data="{ accordion: false }" x-on:click.prevent="accordion = !accordion">
        <div>
          <div class="pr-5">
            <h5 class="text-lg font-medium text-delft-blue">Jak fungují solární panely?</h5>
          </div>
          <div class="overflow-hidden h-0 pr-5 duration-500" x-ref="container" :style="accordion ? 'height: ' + $refs.container.scrollHeight + 'px' : ''">
            <p class="text-gray-50 mt-4">Poskytujeme řadu řešení zelené energie, včetně solárních elektráren, větrných turbín, energeticky úsporných spotřebičů a chytrých domácích technologií pro zvýšení udržitelnosti energie.</p>
          </div>
        </div>
        <span class="flex-shrink-0">
          <div :class="{'hidden': accordion}">
            <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 5.69995V18.3" stroke="#2b3756" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M5.69995 12H18.3" stroke="#2b3756" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </div>
          <div class="hidden" :class="{'hidden': !accordion}">
            <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M5.69995 12H18.3" stroke="#2b3756" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </div>
        </span>
      </button>
      <div class="sm:flex py-10 px-5 sm:px-10 bg-moonstone rounded-2xl">
        <div class="mb-4 sm:mb-0 sm:mr-6">
          <svg width="48" height="48" viewbox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 8C0 3.58172 3.58172 0 8 0H40C44.4183 0 48 3.58172 48 8V40C48 44.4183 44.4183 48 40 48H8C3.58172 48 0 44.4183 0 40V8Z" fill="#2b3756"></path>
            <path d="M13.676 15.5617C11.7951 17.8602 10.6666 20.7983 10.6666 24C10.6666 27.2017 11.7951 30.1398 13.6761 32.4383L18.9201 27.1943C18.3372 26.2694 18 25.174 18 24C18 22.8259 18.3372 21.7306 18.92 20.8057L13.676 15.5617Z" fill="white"></path>
            <path d="M15.5616 13.6761L20.8056 18.9201C21.7306 18.3372 22.8259 18 24 18C25.174 18 26.2694 18.3372 27.1943 18.9201L32.4383 13.6761C30.1398 11.7951 27.2017 10.6666 24 10.6666C20.7982 10.6666 17.8601 11.7951 15.5616 13.6761Z" fill="white"></path>
            <path d="M34.3239 15.5617L29.0799 20.8057C29.6628 21.7307 30 22.8259 30 24C30 25.174 29.6627 26.2693 29.0799 27.1943L34.3238 32.4383C36.2048 30.1398 37.3333 27.2017 37.3333 24C37.3333 20.7983 36.2048 17.8602 34.3239 15.5617Z" fill="white"></path>
            <path d="M32.4382 34.3239L27.1942 29.0799C26.2693 29.6628 25.174 30 24 30C22.8259 30 21.7307 29.6628 20.8057 29.0799L15.5617 34.3239C17.8602 36.2048 20.7983 37.3333 24 37.3333C27.2016 37.3333 30.1397 36.2048 32.4382 34.3239Z" fill="white"></path>
          </svg>
        </div>
        <div>
          <h5 class="text-xl font-medium mb-4 text-delft-blue">Stále máte otázky?</h5>
          <p class="text-delft-blue/80"><span>Pro pomoc navštivte naši</span> <a class="inline-block text-delft-blue font-medium underline" href="{{ route('contact') }}">stránku Kontaktujte nás</a> <span>nebo zavolejte na naši linku podpory na</span> <span class="text-delft-blue font-medium">(671) 555-0110</span> <span>. Náš vyhrazený tým je připraven vám pomoci na vaší cestě k čistější, zdravější planetě.</span></p>
        </div>
      </div>
    </div>
  </div>
</section>