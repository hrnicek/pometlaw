@props([
    'label' => 'Vyberte možnost',
    'options' => [],
    'selected' => [],
    'multiple' => false,
    'searchable' => false,
    'placeholder' => 'Hledat...'
])

@php
    $dropdownId = 'dropdown-' . uniqid();
@endphp

<div class="relative" x-data="{
    open: false,
    selected: {{ json_encode($selected) }},
    options: {{ json_encode($options) }},
    search: '',
    multiple: {{ $multiple ? 'true' : 'false' }},
    searchable: {{ $searchable ? 'true' : 'false' }},
    filteredOptions() {
        if (!this.searchable || !this.search) return this.options;
        return this.options.filter(option =>
            option.label.toLowerCase().includes(this.search.toLowerCase())
        );
    },
    toggleOption(option) {
        if (this.multiple) {
            const index = this.selected.findIndex(s => s.value === option.value);
            if (index > -1) {
                this.selected.splice(index, 1);
            } else {
                this.selected.push(option);
            }
        } else {
            this.selected = [option];
            this.open = false;
        }
    },
    isSelected(option) {
        return this.selected.some(s => s.value === option.value);
    },
    removeOption(option) {
        this.selected = this.selected.filter(s => s.value !== option.value);
    },
    displayText() {
        if (this.selected.length === 0) return '{{ $label }}';
        if (!this.multiple) return this.selected[0].label;
        if (this.selected.length === 1) return this.selected[0].label;
        return `${this.selected.length} vybráno`;
    }
}">
    <!-- Trigger -->
    <button
        @click="open = !open"
        @keydown.escape="open = false"
        class="relative w-full bg-white border border-gray-30 rounded-md px-3 py-2 text-left cursor-default focus:outline-none focus:ring-2 focus:ring-delft-blue focus:border-transparent"
        aria-haspopup="listbox"
        :aria-expanded="open"
        type="button"
    >
        <span class="block truncate" x-text="displayText()"></span>
        <span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
            <svg class="h-5 w-5 text-gray-50 dark:text-gray-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </span>
    </button>

    <!-- Selected options (for multiple select) -->
    <div x-show="multiple && selected.length > 0" class="mt-2 flex flex-wrap gap-1">
        <template x-for="option in selected" :key="option.value">
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-delft-blue text-white">
                <span x-text="option.label"></span>
                <button
                    @click="removeOption(option)"
                    class="ml-1 inline-flex items-center justify-center w-4 h-4 rounded-full hover:bg-delft-blue/20 focus:outline-none focus:ring-1 focus:ring-white"
                    aria-label="Odstranit"
                >
                    <svg class="w-2 h-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </span>
        </template>
    </div>

    <!-- Dropdown menu -->
    <div
        x-show="open"
        x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="absolute z-10 mt-1 w-full bg-white dark:bg-gray-10 shadow-lg max-h-60 rounded-md py-1 text-base ring-1 ring-black ring-opacity-5 overflow-auto focus:outline-none"
        role="listbox"
        x-cloak
    >
        <!-- Search input -->
        <div x-show="searchable" class="px-3 py-2 border-b border-gray-20 dark:border-gray-30">
            <input
                x-model="search"
                type="text"
                class="w-full px-3 py-2 border border-gray-30 dark:border-gray-20 rounded-md focus:outline-none focus:ring-2 focus:ring-delft-blue dark:focus:ring-moonstone focus:border-transparent bg-white dark:bg-gray-10"
                :placeholder="'{{ $placeholder }}'"
                @keydown.stop
            >
        </div>

        <!-- Options -->
        <template x-for="option in filteredOptions()" :key="option.value">
            <div
                @click="toggleOption(option)"
                class="cursor-pointer select-none relative py-2 pl-3 pr-9 hover:bg-gray-5 dark:hover:bg-gray-5"
                role="option"
                :aria-selected="isSelected(option)"
            >
                <span
                    class="block truncate"
                    :class="{ 'font-semibold': isSelected(option), 'font-normal': !isSelected(option) }"
                    x-text="option.label"
                ></span>
                <span
                    x-show="isSelected(option)"
                    class="absolute inset-y-0 right-0 flex items-center pr-4 text-delft-blue dark:text-moonstone"
                >
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </span>
            </div>
        </template>

        <!-- No results -->
        <div x-show="searchable && filteredOptions().length === 0" class="px-3 py-2 text-gray-50 dark:text-gray-50">
            Žádné výsledky nenalezeny
        </div>
    </div>
</div>