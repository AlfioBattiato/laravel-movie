<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::factory(50)->create();

        //     for ($i = 0; $i < 10; $i++) {
        //         DB::table('movies')->insert([
        //             'title' => fake()->words(rand(3, 10), true),
        //             'price' => rand(100, 350),
        //             'author' => fake()->name(),
        //             'img' => fake()->imageUrl(640, 480),
        //             'user_id' => rand(1,5),
        //         ]);
        // }
    }
}