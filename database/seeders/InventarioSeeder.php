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

        $inventario2 = new Inventario();
        $inventario2->Nombre = "Mermelada de zarzamora";
        $inventario2->Cantidad = 300;
        $inventario2->Unidad = "Kg";
        $inventario2->Fecha = "2022-11-20";
        $inventario2->Proveedor = "La costeña";
        $inventario2->save();

        $inventario3 = new Inventario();
        $inventario3->Nombre = "Leche Santa Clara";
        $inventario3->Cantidad = 20;
        $inventario3->Unidad = "Lt";
        $inventario3->Fecha = "2023-10-01";
        $inventario3->Proveedor = "Santa Clara";
        $inventario3->save();
    }
}
