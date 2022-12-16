<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corte extends Model
{
    use HasFactory;

    protected $fillable = [
            'tipodoc',
            'documento',
            'nombre1',
            'nombre2',
            'apellido1',
            'apellido2',
            'fechaNacimiento',
            'grupoEtario',
            'pertenenciaEtnica',
            'sexo',
            'gradoEducativa',
            'tipoComplemento',
            'codigo_dane_sede',
            'cruceDocumento',
            'cruceNombre',
            'observacion',
            'corte',
    ];
}
