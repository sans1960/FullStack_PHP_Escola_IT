<?php

namespace Database\Factories;

use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Game::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $num1 = $this->faker->numberBetween(1,6);
        $num2 = $this->faker->numberBetween(1,6);
        $sum = $num1 + $num2;
        return [
            'player_id'=> 3,
            'dia' => '2021-05-15',
             'hora' => '16:00',
            'dado1' => $num1,
            'dado2' => $num2,
            'tirada' =>  $sum
        ];
    }
}
