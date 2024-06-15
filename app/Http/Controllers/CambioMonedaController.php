<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CambioMonedaController extends Controller
{
    private $apiKey = '88bc41c3389980ade81652f2';
    public function obtenerTasaDeCambio($baseCurrency)
    {

        $url = "https://v6.exchangerate-api.com/v6/{$this->apiKey}/latest/{$baseCurrency}";

        $response = file_get_contents($url);
        $data = json_decode($response, true);

        return response()->json($data);
    }

    public function obtenerInformacionMoneda($code)
    {
        $apiKey = 'e89beec2c0ab4aa2b90ac690cacd9075';
        $codigoMoneda = $code;

        $url = "https://openexchangerates.org/api/currencies.json?app_id=$apiKey";
        $response = file_get_contents($url);
        $data = json_decode($response, true);

        return response()->json($data[$codigoMoneda]);

    }

}
