<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaInteres extends Model
{
    use HasFactory;

    protected $table = 'areas_interes';

    protected $fillable = [
        'nombre',
    ];

    /**
     * Ejemplo de relación: Un área de interés puede estar asociada a muchos proyectos.
     * (Descomenta y ajusta si tienes esta relación)
     */
    // public function projects()
    // {
    //     return $this->hasMany(Project::class);
    // }
}
