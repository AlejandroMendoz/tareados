<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'producto' =>$this->faker->randomElement(['Queso','Mantequilla','Quesillo','Carne','Jugo','Especies','frijoles','Arroz']),
            'existencia'=>$this->faker->randomnumber(),
            'valor'=>$this->faker->randomFloat(),
            'codigobarra' =>$this->faker->isbn13()
        ];
    }
}
