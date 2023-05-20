<?php

namespace Database\Seeders;
use App\Models\Inventario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $inventario = new Inventario();
        $inventario->Nombre = "Crema de cacahuate";
        $inventario->Cantidad = 12.54;
        $inventario->Unidad = "Kg";
        $inventario->Fecha = "2023-06-12";
        $inventario->Proveedor = "Nestle";
        $inventario->save();
    }
}
