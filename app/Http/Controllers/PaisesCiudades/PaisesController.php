<?php

namespace App\Http\Controllers\PaisesCiudades;

use App\Http\Controllers\Controller;
use App\Interfaces\PaisesCiudades\PaisesCiudadesInterface;
use Illuminate\Http\Request;

class PaisesController extends Controller
{
    public function obtenerPaises
    (
        Request $request,
        PaisesCiudadesInterface $ciudadesPaisesInterface
    )
    {
        $paises = $ciudadesPaisesInterface->obtenerPaises($request->busqueda);

        return response()->json($paises);
    }
}
