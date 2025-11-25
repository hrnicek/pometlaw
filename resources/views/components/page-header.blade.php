@props(['title', 'description' => null])

<section class="p-4 bg-white">
  <div class="pt-4 pb-12 px-5 xs:px-8 xl:px-12 bg-delft-blue rounded-3xl overflow-hidden relative">
    {{-- Background Pattern --}}
    <div class="absolute inset-0 opacity-10">
      <svg class="w-full h-full" viewBox="0 0 1440 600" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <path d="M0 300C240 200 480 400 720 300C960 200 1200 400 1440 300V600H0V300Z" fill="#ffffff"/>
      </svg>
    </div>
    
    <x-navbar theme="bg-transparent" mode="light" />

    <div class="container mx-auto px-4 relative z-10">
      <div class="flex mb-4 items-center">
        <svg width="8" height="8" viewbox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="4" cy="4" r="4" fill="#65999B"></circle>
        </svg>
        <span class="inline-block ml-2 text-sm font-medium text-white/80">{{ $slot }}</span>
      </div>
      <div class="border-t border-white/25 pt-10">
        <h1 class="font-bold text-4xl sm:text-5xl md:text-6xl mb-6 text-white max-w-3xl">
          {{ $title }}
        </h1>
        @if($description)
          <p class="text-lg text-white/80 max-w-2xl">
            {{ $description }}
          </p>
        @endif
      </div>
    </div>
  </div>
</section>
