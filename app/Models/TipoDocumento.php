<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    use HasFactory;

    protected $table = 'tipo_documento';

    protected $fillable = [
        'nombre',
        'icono',
    ];

    /**
     * Ejemplo de relación: Un tipo de documento puede estar asociado a muchos documentos.
     * (Descomenta y ajusta si tienes esta relación)
     */
    // public function documentos()
    // {
    //     return $this->hasMany(Documento::class);
    // }
}
