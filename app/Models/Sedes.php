<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sedes extends Model
{
    use HasFactory;
    protected $fillable = [
        'consecutivo','nombre','calendario','zona','modelo','codigo_dane_institucion'
    ];

    public function institucion()
    {
        return $this->belongsTo(Institucion::class,
            'codigo_dane_institucion',
            'codigo_dane'
        );
    }
}
