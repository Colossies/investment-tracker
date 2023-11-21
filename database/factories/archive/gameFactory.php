<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\game_company;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\game>
 */
class gameFactory extends Factory
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
            // $game_company_id = game_company::all()->pluck("id")->toArray(),
            
            'name' => fake()->title,
            // 'game_company_id' => fake()->randomElement($game_company_id),
            'game_company_id' => game_company::inRandomOrder()->first()->id,
        ];
    }
}
