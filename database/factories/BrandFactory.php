<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

        // 'title'=>fake()->name,
        // 'logo'=>fake()->name,
        // 'status'=>1

        'title'=>$this->faker->name,
            'logo'=>$this->faker->name,
            'status'=>1


        ];
    }
}
