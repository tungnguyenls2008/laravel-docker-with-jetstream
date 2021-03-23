<?php

namespace Database\Factories;

use App\Models\SomeModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SomeModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SomeModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'integer' => random_int(1,9999999),
            'string' => $this->faker->realText(),
            'time' => now(),
            'double' => (double)mt_rand() / (double)mt_getrandmax(),
            'float' => (float)mt_rand() / (float)getrandmax(),
            'boolean' => (bool)random_int(0, 1),
        ];
    }
}
