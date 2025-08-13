<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $table = 'regiones';

    protected $fillable = [
        'nombre',
    ];

    /**
     * Ejemplo de relación: Una región puede tener muchos usuarios.
     * (Descomenta y ajusta si tienes esta relación)
     */
    // public function users()
    // {
    //     return $this->hasMany(User::class);
    // }
}
