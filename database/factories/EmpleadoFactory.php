<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleado>
 */
class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=> $this->faker->name(),
            'turno'=> $this->faker->randomElement(['Diurno','Nocturno']),
            'Idnumero' =>$this->faker->numerify('####-####-####'),
            'telefono'=>$this->faker->phonenumber(),
            'direccion' =>$this->faker->address()
        ];
    }
}
