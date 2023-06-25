<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $categorias = [
            [
                'nombre' => 'Medicamentos',
                'descripcion' => 'Productos medicinales para tratamientos, suplementos y medicamentos recetados para animales.',
            ],
            [
                'nombre' => 'Alimentación',
                'descripcion' => 'Productos relacionados con la alimentación de los animales, como comida seca, comida húmeda, snacks y suplementos alimenticios.',
            ],
            [
                'nombre' => 'Higiene',
                'descripcion' => 'Productos de higiene animal, como champús, acondicionadores, productos para el cuidado dental y productos para el cuidado de la piel.',
            ],
            [
                'nombre' => 'Accesorios',
                'descripcion' => 'Productos como correas, collares, camas, jaulas y transportadoras para mascotas.',
            ],
            [
                'nombre' => 'Juguetes',
                'descripcion' => 'Productos de entretenimiento y juguetes para animales.',
            ],
            [
                'nombre' => 'Otros',
                'descripcion' => 'Una categoría genérica para cualquier otro tipo de producto que no se ajuste a las categorías anteriores.',
            ],
        ];

        foreach ($categorias as $categoriaData) {
            $existingCategoria = Categoria::where('nombre', $categoriaData['nombre'])->first();

            if (!$existingCategoria) {
                Categoria::create($categoriaData);
            }
        }
    }
}
