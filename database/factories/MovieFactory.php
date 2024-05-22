<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Movie;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Array di URL da cui selezionare randomicamente
        $imageUrls = [
            "https://image.tmdb.org/t/p/original//iADOJ8Zymht2JPMoy3R7xceZprc.jpg.webp",
            "https://image.tmdb.org/t/p/original//zK2sFxZcelHJRPVr242rxy5VK4T.jpg.webp",
            "https://image.tmdb.org/t/p/original//fdZpvODTX5wwkD0ikZNaClE4AoW.jpg.webp",
            "https://image.tmdb.org/t/p/original//39wmItIWsg5sZMyRUHLkWBcuVCM.jpg.webp",
            "https://image.tmdb.org/t/p/original//lfRkUr7DYdHldAqi3PwdQGBRBPM.jpg.webp",
            "https://image.tmdb.org/t/p/original//z1p34vh7dEOnLDmyCrlUVLuoDzd.jpg.webp",
            "https://image.tmdb.org/t/p/original//gho58bYmw9juYXmUSHRJKOngJGn.jpg.webp",
            "https://image.tmdb.org/t/p/original//y3AeW200hqGLxoPyHMDHpzudylz.jpg.webp",
            "https://image.tmdb.org/t/p/original//e1J2oNzSBdou01sUvriVuoYp0pJ.jpg.webp",
            "https://image.tmdb.org/t/p/original//9Gg1oM8Us8gCS5aJA8e0ZRuIHnf.jpg.webp",
          
           
        ];

        return [
            'name' => strtoupper($this->faker->words(rand(1, 3), true)),
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. Cras venenatis euismod malesuada. Nulla facilisi. Donec nec eros eget nisl fringilla commodo. Nulla facilisi. Phasellus eget velit at orci condimentum aliquam. Morbi fermentum ex vel ex eleifend, nec tempor arcu consectetur.
                Fusce posuere felis id sapien gravida, non tempor arcu sollicitudin. Nulla facilisi. Sed at
                elit a dui sollicitudin euismod. Suspendisse non felis eu lacus ultricies ultrices. Nam vestibulum, erat et 
                feugiat scelerisque, quam lacus blandit sapien, et congue ligula felis et purus. Sed tincidunt, ex non tempus
                fermentum, justo urna egestas dui, 
                sed varius ante ipsum ut magna. Vestibulum quis neque sit amet orci consequat consectetur. Nam sit amet erat a urna vulputate fringilla.",
            'year' => rand(2015, 2024),
            'rate' => rand(4, 10),
            'img' => $this->faker->randomElement($imageUrls),  
            'user_id' => 1,
        ];
    }
}
