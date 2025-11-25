@extends('layouts.app')

@section('content')
<x-page-header 
    :title="$article->title" 
    :description="($article->published_at ? $article->published_at->format('j. n. Y') : '')">
    Blog
</x-page-header>

<section class="py-16 bg-white">
  <div class="container mx-auto px-4 max-w-3xl">
    @php($imageUrl = $article->getFirstMediaUrl('image'))
    @if($imageUrl)
      <img src="{{ $imageUrl }}" alt="{{ $article->title }}" class="w-full h-64 object-cover rounded-2xl border border-zinc-200 mb-8" />
    @endif
    @if($article->perex)
      <p class="text-lg text-zinc-600 mb-6">{{ $article->perex }}</p>
    @endif
    <div class="prose prose-zinc max-w-none">
      {!! nl2br(e($article->content)) !!}
    </div>
  </div>
</section>
@endsection
