<?php

namespace Database\Seeders;

use App\Models\PaisesCiudades\Ciudad;
use App\Models\PaisesCiudades\Pais;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaisesCiudadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear países
        $paises = ['Inglaterra', 'Japón', 'India', 'Dinamarca'];
        foreach ($paises as $pais) {
            Pais::create(['nombre' => $pais]);
        }

        // Crear ciudades asociadas a cada país
        $ciudades = [
            // Inglaterra
            ['id_pais' => 1, 'nombre' => 'Londres'],
            ['id_pais' => 1, 'nombre' => 'Birmingham'],
            ['id_pais' => 1, 'nombre' => 'Manchester'],
            ['id_pais' => 1, 'nombre' => 'Liverpool'],
            ['id_pais' => 1, 'nombre' => 'Leeds'],
            ['id_pais' => 1, 'nombre' => 'Sheffield'],
            ['id_pais' => 1, 'nombre' => 'Bristol'],
            ['id_pais' => 1, 'nombre' => 'Nottingham'],
            ['id_pais' => 1, 'nombre' => 'Newcastle'],
            ['id_pais' => 1, 'nombre' => 'Leicester'],

            // Japón
            ['id_pais' => 2, 'nombre' => 'Tokio'],
            ['id_pais' => 2, 'nombre' => 'Osaka'],
            ['id_pais' => 2, 'nombre' => 'Kioto'],
            ['id_pais' => 2, 'nombre' => 'Yokohama'],
            ['id_pais' => 2, 'nombre' => 'Nagoya'],
            ['id_pais' => 2, 'nombre' => 'Sapporo'],
            ['id_pais' => 2, 'nombre' => 'Fukuoka'],
            ['id_pais' => 2, 'nombre' => 'Hiroshima'],
            ['id_pais' => 2, 'nombre' => 'Sendai'],
            ['id_pais' => 2, 'nombre' => 'Kobe'],

            // India
            ['id_pais' => 3, 'nombre' => 'Delhi'],
            ['id_pais' => 3, 'nombre' => 'Bombay'],
            ['id_pais' => 3, 'nombre' => 'Bangalore'],
            ['id_pais' => 3, 'nombre' => 'Chennai'],
            ['id_pais' => 3, 'nombre' => 'Kolkata'],
            ['id_pais' => 3, 'nombre' => 'Hyderabad'],
            ['id_pais' => 3, 'nombre' => 'Pune'],
            ['id_pais' => 3, 'nombre' => 'Ahmedabad'],
            ['id_pais' => 3, 'nombre' => 'Jaipur'],
            ['id_pais' => 3, 'nombre' => 'Lucknow'],

            // Dinamarca
            ['id_pais' => 4, 'nombre' => 'Copenhague'],
            ['id_pais' => 4, 'nombre' => 'Odense'],
            ['id_pais' => 4, 'nombre' => 'Aarhus'],
            ['id_pais' => 4, 'nombre' => 'Aalborg'],
            ['id_pais' => 4, 'nombre' => 'Esbjerg'],
            ['id_pais' => 4, 'nombre' => 'Randers'],
            ['id_pais' => 4, 'nombre' => 'Kolding'],
            ['id_pais' => 4, 'nombre' => 'Horsens'],
            ['id_pais' => 4, 'nombre' => 'Vejle'],
            ['id_pais' => 4, 'nombre' => 'Roskilde'],
        ];

        foreach ($ciudades as $ciudadData) {
            Ciudad::create($ciudadData);
        }

    }
}
