<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $titles = [
            'Novinky v zákoně o veřejných zakázkách',
            'Jak připravit zadávací dokumentaci správně',
            'GDPR v praxi: nejčastější chyby',
            'Judikatura, která hýbe veřejnými zakázkami',
            'Transparentnost a efektivita v nákupech',
            'Elektronické aukce: kdy a jak je použít',
        ];

        $paragraphs = $this->faker->paragraphs(mt_rand(4, 8));
        $content = implode("\n\n", $paragraphs);

        return [
            'title' => $this->faker->randomElement($titles),
            'slug' => $this->faker->slug(),
            'perex' => $this->faker->text(160),
            'content' => $content,
            'published_at' => $this->faker->dateTimeBetween('-60 days', 'now'),
            'is_published' => true,
            'created_at' => $this->faker->dateTimeBetween('-90 days', 'now'),
            'updated_at' => now(),
        ];
    }

    public function unpublished(): static
    {
        return $this->state(fn (array $attributes) => [
            'published_at' => null,
        ]);
    }

    public function configure(): static
    {
        return $this->afterCreating(function (Article $article) {
            try {
                $url = fake()->randomElement([
                    'https://cdn.flyonui.com/fy-assets/blocks/marketing-ui/blog/blog-36.png',
                    'https://cdn.flyonui.com/fy-assets/blocks/marketing-ui/blog/blog-37.png',
                    'https://cdn.flyonui.com/fy-assets/blocks/marketing-ui/blog/blog-38.png',
                ]);
                $article->addMediaFromUrl($url)->toMediaCollection('image');
            } catch (\Throwable $e) {
                // ignore media failures in factory
            }
        });
    }
}
