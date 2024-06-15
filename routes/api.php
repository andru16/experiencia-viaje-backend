<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaisesCiudades\PaisesController;
use App\Http\Controllers\PaisesCiudades\CiudadesController;
use App\Http\Controllers\CambioMonedaController;
use App\Http\Controllers\HistorialBusquedaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/paises/obtener', [PaisesController::class, 'obtenerPaises']);
Route::get('/ciudades/obtener/{idPais}', [CiudadesController::class, 'obtenerCiudades']);
Route::get('/tasa-de-cambio/{baseCurrency}', [CambioMonedaController::class, 'obtenerTasaDeCambio']);
Route::get('/informacion-moneda/{code}', [CambioMonedaController::class, 'obtenerInformacionMoneda']);
Route::post('/historial-busqueda/registrar-busqueda', [HistorialBusquedaController::class, 'registrarBusqueda']);
Route::get('/historial-busqueda/listar-historial', [HistorialBusquedaController::class, 'historialDeBusquedad']);
