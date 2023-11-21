<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\publisher;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\game_company>
 */
class game_companyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            // $publisherId = publisher::all()->pluck('id')->toArray(),

            'name' => fake()->company,
            'publisher_id' => publisher::inRandomOrder()->first()->id,
        ];
    }
}
