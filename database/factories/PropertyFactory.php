<?php

namespace Database\Factories;

use App\Models\Property;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->sentence,
            'price'=> rand(100000,50000000),
            'rooms'=> rand(1,10),
            'bathrooms'=>rand(1,10),
            'user_id'=> User::factory()
        ];
    }
}
