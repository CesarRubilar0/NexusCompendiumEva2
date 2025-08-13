<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoActividad extends Model
{
    use HasFactory;

    protected $table = 'tipo_actividad';

    protected $fillable = [
        'nombre',
        'icono',
        'color',
    ];

    /**
     * Ejemplo de relación: Un tipo de actividad puede estar asociado a muchas actividades.
     * (Descomenta y ajusta si tienes esta relación)
     */
    // public function actividades()
    // {
    //     return $this->hasMany(Actividad::class);
    // }
}
