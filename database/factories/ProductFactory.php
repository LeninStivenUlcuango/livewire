<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>"Item ".fake()->word(),
            'price'=> 200,
            'description'=> fake()->text($maxNbChars=200),
            'thumbnail'=> "https://picsum.photos/500/600"
        ];
    }
}
