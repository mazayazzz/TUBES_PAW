<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FilmFactory extends Factory
{
    protected $model = \App\Models\Film::class;

    public function definition(): array
    {
        return [
            'judul' => $this->faker->sentence(3),
            'durasi' => $this->faker->numberBetween(80, 180),
            'genre' => $this->faker->randomElement(['Fiksi', 'Drama', 'Action']),
            'rating' => $this->faker->numberBetween(1, 10),
        ];
    }
}
