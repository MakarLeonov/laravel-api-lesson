<?php

namespace Database\Factories;

use App\Models\Desk ;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DeskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Desk::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
