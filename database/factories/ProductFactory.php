<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'name'=>$this->faker->word(),
        'description'=>  $this->faker->paragraph(),
        'price'=>  $this->faker->randomFloat(2,100,1000),
        'stock'=>  $this->faker->randomNumber(5,false),
        'sku'=>  $this->faker->randomNumber(5,true),
        'category_id'=>  22,



        
        ];
    }
}
