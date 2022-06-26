<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Exercise;
use Illuminate\Support\Str;

class ExerciseFactory extends Factory
{

    protected $model = Exercise::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'profile' => Str::random(5)
        ];
    }
}
