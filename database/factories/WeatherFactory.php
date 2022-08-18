<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Weather>
 */
class WeatherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'city' => $this->faker->city,
            'weather' => $this->faker->word,
            'temperature' => $this->faker->numberBetween(0, 100),
            'humidity' => $this->faker->numberBetween(0, 100),
            'start_date' => $this->faker->dateTimeBetween('-1 years', 'now'),
        ];
    }
}
