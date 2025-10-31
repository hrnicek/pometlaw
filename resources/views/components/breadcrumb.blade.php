@props(['items' => []])

@if(count($items) > 1)
    <nav aria-label="Breadcrumb" class="flex items-center gap-2 text-sm text-gray-50">
        <ol class="flex items-center gap-2">
            @foreach($items as $index => $item)
                @if($index > 0)
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-gray-30" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </li>
                @endif

                <li>
                    @if($index === count($items) - 1)
                        <span class="text-brand-text font-medium" aria-current="page">
                            {{ $item['label'] }}
                        </span>
                    @else
                        <a
                            href="{{ $item['url'] ?? '#' }}"
                            class="text-gray-50 hover:text-delft-blue transition-colors duration-200"
                        >
                            {{ $item['label'] }}
                        </a>
                    @endif
                </li>
            @endforeach
        </ol>
    </nav>
@endif