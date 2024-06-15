<?php

namespace App\Models;

use App\Models\PaisesCiudades\Ciudad;
use App\Models\PaisesCiudades\Pais;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialBusqueda extends Model
{
    use HasFactory;

    public function pais()
    {
        return $this->belongsTo(Pais::class, 'id_pais');
    }

    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class, 'id_ciudad');
    }
}
