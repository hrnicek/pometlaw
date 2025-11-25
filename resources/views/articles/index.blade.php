@extends('layouts.app')

@section('content')
<x-page-header 
    title="Články" 
    description="Aktuality a články z právního světa">
    Blog
</x-page-header>

<section class="py-16 bg-white">
  <div class="container mx-auto px-4">
    @if($articles->count() > 0)
      <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
        @foreach($articles as $article)
          <x-card-article 
            :title="$article->title"
            :excerpt="$article->perex"
            :href="route('articles.show', $article)"
            :image="$article->getFirstMediaUrl('image')"
            :date="$article->published_at"
          />
        @endforeach
      </div>

      <div class="mt-12">
        {{ $articles->links() }}
      </div>
    @else
      <div class="text-center py-20">
        <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-zinc-100 mb-6">
          <svg class="w-8 h-8 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-zinc-900 mb-2">Žádné články</h3>
        <p class="text-zinc-500 max-w-md mx-auto mb-8">Zatím nemáme publikované články. Zkontrolujte prosím později.</p>
      </div>
    @endif
  </div>
</section>
@endsection
