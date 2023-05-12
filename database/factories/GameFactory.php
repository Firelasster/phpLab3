<?php
namespace Database\Factories;

use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    protected $model = Game::class;

    public function definition()
    {
        $genres = ['Action', 'Adventure', 'RPG', 'Simulation', 'Strategy'];
        return [
            'title' => $this->faker->sentence($nbWords = 3, $variableNbWords = true),
            'description' => $this->faker->paragraph,
            'genre'=> $this->faker->randomElement($genres),
        ];
    }
}
