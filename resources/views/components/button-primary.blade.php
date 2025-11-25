<button {{ $attributes->merge(['class' => 'bg-delft-blue hover:bg-delft-blue/90 text-white font-medium px-5 py-2.5 rounded-xl transition-colors duration-200 flex items-center justify-center gap-2']) }}>
  {{ $slot }}
</button>
