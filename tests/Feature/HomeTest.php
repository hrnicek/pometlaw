<?php

use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use function Pest\Laravel\get;

uses(RefreshDatabase::class);

it('shows 3 latest articles on homepage', function () {
    $a1 = Article::factory()->create(['title' => 'A1', 'published_at' => now()->subDays(10), 'is_published' => true]);
    $a2 = Article::factory()->create(['title' => 'A2', 'published_at' => now()->subDays(5), 'is_published' => true]);
    $a3 = Article::factory()->create(['title' => 'A3', 'published_at' => now()->subDays(2), 'is_published' => true]);
    $a4 = Article::factory()->create(['title' => 'A4', 'published_at' => now()->subDays(1), 'is_published' => true]);

    $response = get('/');
    $response->assertOk();

    $response->assertSee('A2');
    $response->assertSee('A3');
    $response->assertSee('A4');
    $response->assertDontSee('A1');
});
