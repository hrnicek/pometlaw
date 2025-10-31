<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lecturer>
 */
class LecturerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $titles = ['JUDr.', 'Mgr.', 'PhDr.', 'Ing.', 'doc. JUDr.', 'prof. JUDr.', null];
        $specializations = [
            'Odborník na veřejné zakázky s více než 15 lety praxe. Specializuje se na zadávací řízení a právní aspekty veřejných zakázek.',
            'Právník se zaměřením na správní právo a veřejnou správu. Dlouholetý praktik s bohatými zkušenostmi z oblasti správního řízení.',
            'Specialista na občanské právo a smluvní vztahy. Autor několika odborných publikací a častý přednášející na právnických konferencích.',
            'Expert na pracovní právo s praxí v oblasti personalistiky a pracovněprávních vztahů. Poskytuje poradenství firmám i jednotlivcům.',
            'Daňový poradce a právník specializující se na daňové právo. Má bohaté zkušenosti s daňovým plánováním a optimalizací.',
            'Odborník na ochranu osobních údajů a GDPR. Pomáhá organizacím s implementací a dodržováním pravidel ochrany dat.',
            'Právník s praxí v oblasti veřejné správy a samosprávy. Specializuje se na právní aspekty fungování obcí a krajů.',
            'Expert na evropské právo a jeho implementaci do českého právního řádu. Dlouholetý praktik s mezinárodními zkušenostmi.',
        ];

        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'title' => $this->faker->randomElement($titles),
            'biography' => $this->faker->randomElement($specializations),
            'photo' => null, // Bude se nastavovat manuálně nebo přes seeder
            'created_at' => $this->faker->dateTimeBetween('-2 years', 'now'),
            'updated_at' => now(),
        ];
    }

    /**
     * Indicate that the lecturer has a photo.
     */
    public function withPhoto(): static
    {
        return $this->state(fn (array $attributes) => [
            'photo' => 'lecturers/'.$this->faker->uuid().'.jpg',
        ]);
    }

    /**
     * Indicate that the lecturer has a specific title.
     */
    public function withTitle(string $title): static
    {
        return $this->state(fn (array $attributes) => [
            'title' => $title,
        ]);
    }
}
