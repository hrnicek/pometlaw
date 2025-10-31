@props([
    'items' => [],
    'multiple' => false,
    'defaultOpen' => []
])

<div class="space-y-4" x-data="{
    openItems: {{ json_encode($defaultOpen) }},
    multiple: {{ $multiple ? 'true' : 'false' }},
    toggleItem(index) {
        if (this.multiple) {
            if (this.openItems.includes(index)) {
                this.openItems = this.openItems.filter(i => i !== index);
            } else {
                this.openItems.push(index);
            }
        } else {
            this.openItems = this.openItems.includes(index) ? [] : [index];
        }
    },
    isOpen(index) {
        return this.openItems.includes(index);
    }
}">
    @foreach($items as $index => $item)
        <div class="border border-gray-20 dark:border-gray-30 rounded-xl overflow-hidden bg-white dark:bg-gray-10">
            <button
                @click="toggleItem({{ $index }})"
                class="w-full px-6 py-5 text-left hover:bg-gray-5 dark:hover:bg-gray-5 transition-colors duration-200 flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-delft-blue dark:focus:ring-moonstone focus:ring-inset"
                :aria-expanded="isOpen({{ $index }})"
                aria-controls="accordion-content-{{ $index }}"
                id="accordion-header-{{ $index }}"
            >
                <span class="text-lg font-semibold text-brand-text dark:text-white">
                    {{ $item['title'] ?? 'Nadpis' }}
                </span>
                <svg
                    class="w-5 h-5 text-gray-50 dark:text-gray-50 transition-transform duration-200"
                    :class="{ 'rotate-180': isOpen({{ $index }}) }"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>

            <div
                x-show="isOpen({{ $index }})"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 max-h-0"
                x-transition:enter-end="opacity-100 max-h-screen"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 max-h-screen"
                x-transition:leave-end="opacity-0 max-h-0"
                class="overflow-hidden"
                id="accordion-content-{{ $index }}"
                aria-labelledby="accordion-header-{{ $index }}"
                x-cloak
            >
                <div class="px-6 pb-6 text-gray-50 dark:text-gray-50 leading-relaxed">
                    {!! $item['content'] ?? 'Obsah' !!}
                </div>
            </div>
        </div>
    @endforeach
</div>