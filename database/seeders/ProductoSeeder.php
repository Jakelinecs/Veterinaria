<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
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
                'Codigo' => 'TAB001',
                'nombre' => 'Antieméticos',
                'descripcion' => 'Medicamentos que ayudan a controlar las náuseas y los vómitos en animales.',
            ],
            [
                'Codigo' => 'TAB002',
                'nombre' => 'Antihistamínicos',
                'descripcion' => 'Usados para tratar reacciones alérgicas y picaduras de insectos en animales.',
            ],
            [
                'Codigo' => 'TAB003',
                'nombre' => 'Antiinflamatorios esteroides',
                'descripcion' => ' Ayudan a reducir la inflamación más intensa en ciertas condiciones médicas.',
            ],
            [
                'Codigo' => 'TAB004',
                'nombre' => 'Antisépticos',
                'descripcion' => 'Utilizados para limpiar y desinfectar heridas en la piel y evitar infecciones.

                Anticonvulsivantes: Medicamentos para controlar las convulsiones y epilepsia en animales.',
            ],
            [
                'Codigo' => 'TAB005',
                'nombre' => 'Medicamentos hormonales',
                'descripcion' => 'Utilizados para regular desequilibrios hormonales en animales.',
            ],
            [
                'Codigo' => 'TAB006',
                'nombre' => 'Productos para el control de pulgas y garrapatas',
                'descripcion' => ' Incluyen collares, pipetas, champús y aerosoles.',
            ],
            [
                'Codigo' => 'TAB007',
                'nombre' => 'Laxantes para gatos y perros',
                'descripcion' => ' Ayudan a aliviar el estreñimiento en mascotas.',
            ],
            [
                'Codigo' => 'TAB008',
                'nombre' => 'Medicamentos para el control de la diabetes',
                'descripcion' => 'Ayudan a regular los niveles de azúcar en la sangre en animales con diabetes.',
            ],
            [
                'Codigo' => 'SOL001',
                'nombre' => 'Soluciones de limpieza de oídos',
                'descripcion' => ' Para mantener las orejas de los animales limpias y libres de acumulaciones.',
            ],
        ];

        foreach ($categorias as $categoriaData) {
            $existingCategoria = Producto::where('nombre', $categoriaData['nombre'])->first();

            if (!$existingCategoria) {
                Producto::create(
                    [
                        'idcategoria'=> 1,
                        'codigo'=>$categoriaData['Codigo'],
                        'nombre'=>$categoriaData['nombre'],
                        'precio_venta'=>45,
                        'stock'=>12,
                        'descripcion'=>$categoriaData['descripcion'],
                        'estado'=>1
                ]);

            }
        }

    }
}
