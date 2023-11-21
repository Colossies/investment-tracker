<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;
use Illuminate\Support\Testing\Fakes\Fake;
use App\Models\game_company;
use App\Models\publisher;
use App\Models\game;
class main extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        publisher::factory()
        ->count(10)
        ->create();

        game_company::factory()
        ->count(30) 
        ->create();

        game::factory()
        ->count(90)
        ->create();
    }
}
