<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CriptomonedaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'logotipo' => $this->faker->text('105'),
            'nombre' => $this->faker->firstName(),
            'precio' => $this->faker->numberBetween(1,4),
            'descripcion' => $this->faker->text('200'),
            'lenguaje_id' => $this->faker->numberBetween(1, 5),
            'fecha_creacion'=> $this->faker->date(),
        ];
    }
}
