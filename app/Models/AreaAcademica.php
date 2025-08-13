<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaAcademica extends Model
{
    use HasFactory;

    protected $table = 'areas_academicas';

    protected $fillable = [
        'nombre',
    ];

    /**
     * Ejemplo de relación: Un área académica puede tener muchos usuarios.
     * (Descomenta y ajusta si tienes esta relación)
     */
    // public function users()
    // {
    //     return $this->hasMany(User::class);
    // }
}
