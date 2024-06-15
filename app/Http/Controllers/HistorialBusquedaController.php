<?php

namespace App\Http\Controllers;

use App\Models\HistorialBusqueda;
use App\Models\Pedidos\Pedido;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class HistorialBusquedaController extends Controller
{
    public function registrarBusqueda(Request $request){

        DB::beginTransaction();
        try {

            $presupuesto = str_replace('.', '', $request->presupuesto);
            $presupuesto = str_replace('.', '.', $presupuesto);
            $presupuestoDecimal = floatval($presupuesto);

            $nuevaBusqueda = new HistorialBusqueda();
            $nuevaBusqueda->id_pais = $request->id_pais;
            $nuevaBusqueda->id_ciudad = $request->id_ciudad;
            $nuevaBusqueda->presupuesto = $presupuestoDecimal;
            $nuevaBusqueda->save();

            DB::commit();

            return response()->json('Se ha agregado la busqueda',200);

        }catch (\Exception $exception) {
            DB::rollBack();
            return response()->json([
                'codigo' => $exception->getCode(),
                'mensaje' => $exception->getMessage()
            ], 401);
        }

    }

    public function historialDeBusquedad(){
        $historialBusquedas = HistorialBusqueda::with('pais', 'ciudad')
                                                ->orderBy('created_at', 'desc')
                                                ->take(5)
                                                ->get()
                                                ->map(function ($busquedad){
                                                    $fecha = Carbon::parse($busquedad->created_at)->format('Y-m-d');
                                                    return [
                                                        'id' => $busquedad->id,
                                                        'pais' => $busquedad->pais->nombre,
                                                        'ciudad' => $busquedad->ciudad->nombre,
                                                        'presupuesto' => number_format($busquedad->presupuesto, 0,',', '.'),
                                                        'fecha' => $fecha
                                                    ];
                                                });

        return response()->json($historialBusquedas);
    }

}
