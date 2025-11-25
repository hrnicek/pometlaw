<?php

use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use function Pest\Laravel\get;

uses(RefreshDatabase::class);

it('shows articles index', function () {
    Article::factory()->count(5)->create();

    $response = get('/clanky');
    $response->assertOk();
});

it('shows article detail', function () {
    $article = Article::factory()->create([
        'title' => 'Test článek',
        'perex' => 'Krátký popis',
        'content' => 'Obsah článku',
        'published_at' => now(),
        'is_published' => true,
    ]);

    $response = get(route('articles.show', $article));
    $response->assertOk();
    $response->assertSee('Test článek');
});
