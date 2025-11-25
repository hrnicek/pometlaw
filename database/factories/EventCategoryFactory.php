<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EventCategory>
 */
class EventCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = [
            [
                'name' => 'Veřejné zakázky',
                'description' => 'Kurzy zaměřené na problematiku veřejných zakázek, zadávací řízení a související legislativu.',
            ],
            [
                'name' => 'Správní právo',
                'description' => 'Vzdělávání v oblasti správního práva, správního řízení a veřejné správy.',
            ],
            [
                'name' => 'Občanské právo',
                'description' => 'Kurzy pokrývající občanské právo, smlouvy, závazky a majetkové vztahy.',
            ],
            [
                'name' => 'Pracovní právo',
                'description' => 'Specializované kurzy zaměřené na pracovněprávní vztahy a související problematiku.',
            ],
            [
                'name' => 'Daňové právo',
                'description' => 'Vzdělávání v oblasti daňového práva, daňových povinností a daňového řízení.',
            ],
            [
                'name' => 'GDPR a ochrana dat',
                'description' => 'Kurzy zaměřené na ochranu osobních údajů a implementaci GDPR.',
            ],
        ];

        $category = fake()->randomElement($categories);

        // Přidáme unikátní suffix pro zabránění duplicitám
        $uniqueSuffix = fake()->unique()->numberBetween(1, 9999);

        return [
            'name' => $category['name'].' #'.$uniqueSuffix,
            'description' => $category['description'],
            'created_at' => now()->subDays(random_int(0, 365))->toDateTime(),
            'updated_at' => now(),
        ];
    }
}
