<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstitucionesOficiales extends Model
{
    use HasFactory;

    public $fillable = [
        'CodEstable',
        'NomEstable',
        'CodSede',
        'NomSede',
        'Tipo',
        'Zona',
        'Direccion',
        'Telefono',
        'EstadoSede',
        'Niveles',
        'Modelos',
        'Grados',
        'X',
        'Y'
    ];

    public function Escudo()
    {
        return $this->hasOne(Escudo::class);
    }

    public function Imagen()
    {
        return $this->hasOne(Imagen::class);
    }
}
