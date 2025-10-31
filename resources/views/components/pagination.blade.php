@props(['paginator'])

@php
    $currentPage = $paginator->currentPage();
    $lastPage = $paginator->lastPage();
    $hasPages = $paginator->hasPages();
@endphp

@if($hasPages)
    <nav class="flex items-center justify-between px-4 py-3 bg-white dark:bg-gray-10 border-t border-gray-20 dark:border-gray-30 sm:px-6" aria-label="Pagination">
        <div class="flex justify-between flex-1 sm:hidden">
            @if($paginator->onFirstPage())
                <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-50 dark:text-gray-50 bg-gray-5 dark:bg-gray-10 border border-gray-30 dark:border-gray-20 cursor-not-allowed rounded-md">
                    Předchozí
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-75 dark:text-gray-75 bg-white dark:bg-gray-10 border border-gray-30 dark:border-gray-20 rounded-md hover:bg-gray-5 dark:hover:bg-gray-5 transition-colors duration-200">
                    Předchozí
                </a>
            @endif

            @if($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="relative ml-3 inline-flex items-center px-4 py-2 text-sm font-medium text-gray-75 dark:text-gray-75 bg-white dark:bg-gray-10 border border-gray-30 dark:border-gray-20 rounded-md hover:bg-gray-5 dark:hover:bg-gray-5 transition-colors duration-200">
                    Další
                </a>
            @else
                <span class="relative ml-3 inline-flex items-center px-4 py-2 text-sm font-medium text-gray-50 dark:text-gray-50 bg-gray-5 dark:bg-gray-10 border border-gray-30 dark:border-gray-20 cursor-not-allowed rounded-md">
                    Další
                </span>
            @endif
        </div>

        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <p class="text-sm text-gray-75 dark:text-gray-75">
                    Zobrazeno
                    <span class="font-medium">{{ $paginator->firstItem() }}</span>
                    až
                    <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    z
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    výsledků
                </p>
            </div>

            <div>
                <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                    {{-- Previous Page Link --}}
                    @if($paginator->onFirstPage())
                        <span class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-30 dark:border-gray-20 bg-gray-5 dark:bg-gray-10 text-sm font-medium text-gray-50 dark:text-gray-50 cursor-not-allowed">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </span>
                    @else
                        <a href="{{ $paginator->previousPageUrl() }}" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-30 dark:border-gray-20 bg-white dark:bg-gray-10 text-sm font-medium text-gray-50 dark:text-gray-50 hover:bg-gray-5 dark:hover:bg-gray-5 transition-colors duration-200">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach($paginator->getUrlRange(1, $lastPage) as $page => $url)
                        @if($page == $paginator->currentPage())
                            <span class="relative inline-flex items-center px-4 py-2 border border-delft-blue dark:border-moonstone bg-delft-blue dark:bg-moonstone text-sm font-medium text-white cursor-default">
                                {{ $page }}
                            </span>
                        @elseif($page == 1 || $page == $lastPage || abs($page - $currentPage) <= 2)
                            <a href="{{ $url }}" class="relative inline-flex items-center px-4 py-2 border border-gray-30 dark:border-gray-20 bg-white dark:bg-gray-10 text-sm font-medium text-gray-75 dark:text-gray-75 hover:bg-gray-5 dark:hover:bg-gray-5 transition-colors duration-200">
                                {{ $page }}
                            </a>
                        @elseif($page == $currentPage - 3 || $page == $currentPage + 3)
                            <span class="relative inline-flex items-center px-4 py-2 border border-gray-30 dark:border-gray-20 bg-white dark:bg-gray-10 text-sm font-medium text-gray-75 dark:text-gray-75">
                                ...
                            </span>
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-30 dark:border-gray-20 bg-white dark:bg-gray-10 text-sm font-medium text-gray-50 dark:text-gray-50 hover:bg-gray-5 dark:hover:bg-gray-5 transition-colors duration-200">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    @else
                        <span class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-30 dark:border-gray-20 bg-gray-5 dark:bg-gray-10 text-sm font-medium text-gray-50 dark:text-gray-50 cursor-not-allowed">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </span>
                    @endif
                </nav>
            </div>
        </div>
    </nav>
@endif