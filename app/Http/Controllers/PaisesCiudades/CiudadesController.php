<?php

namespace App\Http\Controllers\PaisesCiudades;

use App\Http\Controllers\Controller;
use App\Http\Requests\CiudadRequest;
use App\Interfaces\PaisesCiudades\PaisesCiudadesInterface;
use App\Models\PaisesCiudades\Pais;
use App\Services\CiudadesPaises\PaisesCiudadesServices;
use Illuminate\Http\Request;

class CiudadesController extends Controller
{
    public function obtenerCiudades
    (
        $idPais,
        Request $request,
        PaisesCiudadesInterface $paisesCiudadesInterface
    )
    {
        $pais = Pais::findOrFail($idPais);
        $ciudades = $paisesCiudadesInterface->obtenerCiudades($pais, $request->busqueda);

        return response()->json($ciudades);
    }
}
