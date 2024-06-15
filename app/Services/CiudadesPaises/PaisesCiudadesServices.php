<?php

namespace App\Services\CiudadesPaises;



use App\Interfaces\PaisesCiudades\PaisesCiudadesInterface;
use App\Models\PaisesCiudades\Ciudad;
use App\Models\PaisesCiudades\Pais;

class PaisesCiudadesServices implements PaisesCiudadesInterface
{
    public function obtenerPaises($busqueda)
    {
        $paises = Pais::where('nombre', 'like', "%" . $busqueda . "%")
                        ->orderBy('nombre', 'asc')
                        ->get()
                        ->map(function ($pais){
                            return [
                                'id' => $pais->id,
                                'nombre' => $pais->nombre
                            ];
                        });
        return $paises;
    }

    public function obtenerCiudades($pais, $busqueda)
    {

        $ciudades = Ciudad::where('id_pais', $pais->id)
                            ->where('nombre', 'like', "%" . $busqueda . "%")
                            ->orderBy('nombre', 'asc')
                            ->get()
                            ->map(function ($ciudad){
                                return [
                                    'id' => $ciudad->id,
                                    'nombre' => $ciudad->nombre,
                                ];
                            });
        return $ciudades;
    }

}
