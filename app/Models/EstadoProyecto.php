<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoProyecto extends Model
{
    use HasFactory;

    protected $table = 'estados_proyecto';

    protected $fillable = [
        'nombre',
        'color',
    ];

    /**
     * Ejemplo de relación: Un estado de proyecto puede estar asociado a muchos proyectos.
     * (Descomenta y ajusta si tienes esta relación)
     */
    // public function projects()
    // {
    //     return $this->hasMany(Project::class);
    // }
}
