<button {{ $attributes->merge(['class' => 'bg-delft-blue hover:bg-delft-blue/90 text-white font-medium px-6 py-3 rounded-xl transition-colors duration-200 flex items-center justify-center gap-2 shadow-sm hover:shadow-md']) }}>
  {{ $slot }}
</button>
