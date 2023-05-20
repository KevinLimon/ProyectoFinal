<?php

namespace Database\Factories;
use App\Models\Inventario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventario>
 */
class InventarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nombre'=> $this -> faker -> word(),
            'Cantidad'=> $this -> faker -> randomDigit(),
            'Unidad'=> $this -> faker -> randomElement(['Kg', 'Lt', 'Mg', 'Oz']),
            'Fecha'=> $this -> faker -> date(),
            'Proveedor'=> $this -> faker -> word()
        ];
    }
}
