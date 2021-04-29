<?php

namespace Database\Factories;

use App\Models\Gos;
use Illuminate\Database\Eloquent\Factories\Factory;

class GosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Gos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [            
            'gonumber' => $this->faker->text(200),
            'description' => $this->faker->text(200),
            'filelink' => $this->faker->text(30)                      
        ];
    }
}
