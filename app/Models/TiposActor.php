<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiposActor extends Model
{
    use HasFactory;

    protected $table = 'tipos_actor';

    protected $fillable = [
        'nombre',
        'icono',
        'color',
    ];

    /**
     * Ejemplo de relación: Un tipo de actor puede estar asociado a muchos usuarios o entidades.
     * (Descomenta y ajusta si tienes esta relación)
     */
    // public function users()
    // {
    //     return $this->hasMany(User::class);
    // }
}
