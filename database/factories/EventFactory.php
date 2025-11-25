<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\EventCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $eventTitles = [
            'Aktuální změny v zákoně o veřejných zakázkách',
            'Praktické aspekty zadávacího řízení',
            'GDPR v praxi - implementace a dodržování',
            'Správní řízení krok za krokem',
            'Nový občanský zákoník - praktické dopady',
            'Pracovní právo - aktuální judikatura',
            'Daňové optimalizace pro firmy',
            'Ochrana osobních údajů v organizaci',
            'Veřejné zakázky malého rozsahu',
            'Smlouvy v občanském právu',
            'Disciplinární řízení ve veřejné správě',
            'Elektronické aukce ve veřejných zakázkách',
        ];

        $descriptions = [
            'Komplexní přehled aktuálních změn v legislativě s praktickými příklady a doporučeními pro praxi.',
            'Detailní rozbor postupů a procesů s důrazem na praktické aplikace a časté chyby.',
            'Praktický seminář zaměřený na implementaci a dodržování právních požadavků v organizaci.',
            'Systematický výklad problematiky s praktickými cvičeními a případovými studiemi.',
            'Odborný seminář pro právníky a pracovníky veřejné správy s bohatou diskusí.',
            'Aktuální přehled judikatury a jejích dopadů na praxi s konkrétními příklady.',
            'Specializovaný kurz pro pokročilé s důrazem na praktické řešení složitých situací.',
        ];

        $locations = [
            'Praha - Hotel Clarion',
            'Brno - Kongresové centrum',
            'Ostrava - Hotel Imperial',
            'Plzeň - Konferenční sál',
            'České Budějovice - Hotel Zlatý lev',
            'Online webinář',
            'Hradec Králové - Univerzita',
            'Olomouc - Konferenční centrum',
        ];

        $datetimeFrom = now()->addDays(random_int(1, 180))->addHours(random_int(8, 16))->toDateTime();
        $datetimeTo = (clone $datetimeFrom)->modify('+' . random_int(2, 6) . ' hours');

        return [
            'name' => fake()->randomElement($eventTitles),
            'description' => fake()->randomElement($descriptions),
            'datetime_from' => $datetimeFrom,
            'datetime_to' => $datetimeTo,
            'capacity' => fake()->numberBetween(20, 100),
            'price' => fake()->randomElement([2500, 3500, 4500, 5500, 6500, 7500]),
            'location' => fake()->randomElement($locations),
            'event_category_id' => EventCategory::factory(),
            'created_at' => now()->subDays(random_int(0, 90))->toDateTime(),
            'updated_at' => now(),
        ];
    }

    /**
     * Indicate that the event is in the past.
     */
    public function past(): static
    {
        return $this->state(function (array $attributes) {
            $from = now()->subDays(random_int(1, 180))->subHours(random_int(0, 8))->toDateTime();
            return [
                'datetime_from' => $from,
                'datetime_to' => (clone $from)->modify('+' . random_int(2, 6) . ' hours'),
            ];
        });
    }

    /**
     * Indicate that the event is upcoming.
     */
    public function upcoming(): static
    {
        return $this->state(function (array $attributes) {
            $from = now()->addDays(random_int(1, 180))->addHours(random_int(8, 16))->toDateTime();
            return [
                'datetime_from' => $from,
                'datetime_to' => (clone $from)->modify('+' . random_int(2, 6) . ' hours'),
            ];
        });
    }

    /**
     * Indicate that the event is expensive.
     */
    public function expensive(): static
    {
        return $this->state(fn (array $attributes) => [
            'price' => fake()->numberBetween(8000, 15000),
        ]);
    }

    /**
     * Indicate that the event is online.
     */
    public function online(): static
    {
        return $this->state(fn (array $attributes) => [
            'location' => 'Online webinář',
            'capacity' => fake()->numberBetween(50, 200),
        ]);
    }

    /**
     * Indicate that the event has a specific category.
     */
    public function forCategory(EventCategory $category): static
    {
        return $this->state(fn (array $attributes) => [
            'event_category_id' => $category->id,
        ]);
    }
}
