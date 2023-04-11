<?php

namespace Database\Factories;

use Faker\Provider\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $imageUrl = Image::imageUrl(640, 480, 'fashion', true);
        return [
            'title' => $this->faker->sentence(4),
            'overview' => $this->faker->sentence(10),
            'description' => $this->faker->sentence(10),
            'image' => 'https://fastly.picsum.photos/id/510/200/300.jpg?hmac=u6iNoUL4S50O2eGkBF1jHRJL3Hgrbgdb258jroHPYeI',
            'badge' => $this->faker->randomElement(['New', 'Sale', 'Hot']),
            'quantity' => $this->faker->numberBetween(10, 1000),
            'price' => $this->faker->randomFloat(2, 10, 500),
            'offer' => $this->faker->randomElement([0, 1]),
            'sale_price' => $this->faker->randomFloat(2, 10, 500),
            'stock_count' => $this->faker->numberBetween(0, 100),
            'vendor_id' => $this->faker->randomElement([10,11,12]),
            'cat_id' => $this->faker->randomElement([1, 2, 3]),
            'brand_id' => $this->faker->randomElement([1, 2, 3]),
            'url' => $this->faker->url,
            'status' => 1,
        ];
    }
}
