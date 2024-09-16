<?php

namespace Database\Factories;

use App\Models\Data;
use Illuminate\Database\Eloquent\Factories\Factory;

class DataFactory extends Factory
{
//    protected $model = Model::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(2),
            'parent_id' => $this->faker->numberBetween(1,10)
        ];
    }
}
