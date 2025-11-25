<?php

use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use function Pest\Laravel\get;

uses(RefreshDatabase::class);

it('paginates articles index 9 per page', function () {
    // Create 12 articles with increasing recency
    $titles = [];
    for ($i = 1; $i <= 12; $i++) {
        $titles[$i] = 'Article ' . str_pad((string)$i, 2, '0', STR_PAD_LEFT);
        Article::factory()->create([
            'title' => $titles[$i],
            'published_at' => now()->subDays(13 - $i), // A12 is latest
            'is_published' => true,
        ]);
    }

    $page1 = get('/clanky');
    $page1->assertOk();

    // Page 1 should show latest 9: A12..A4
    foreach (range(4, 12) as $i) {
        $page1->assertSee($titles[$i]);
    }
    // And should not show oldest 3: A1..A3
    foreach (range(1, 3) as $i) {
        $page1->assertDontSee($titles[$i]);
    }

    $page2 = get('/clanky?page=2');
    $page2->assertOk();
    foreach (range(1, 3) as $i) {
        $page2->assertSee($titles[$i]);
    }
});
