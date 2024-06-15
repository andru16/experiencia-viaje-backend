<?php

namespace App\Interfaces\PaisesCiudades;

use http\Env\Request;

interface PaisesCiudadesInterface
{

    public function obtenerPaises($busqueda);

    public function obtenerCiudades($pais, $busqueda);

}
