<?php

namespace Database\Factories;

use App\Models\Weight;
use Illuminate\Database\Eloquent\Factories\Factory;

class WeightFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Weight::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $min = $this->faker->numberBetween(45,  90);
        $max = $min + $this->faker->numberBetween(1,  10);
        return [
            'tanggal' => $this->faker->dateTimeThisYear('now', null),
            'min' => $min,
            'max' => $max,
        ];
    }
}
