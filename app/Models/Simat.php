<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Simat extends Model
{
    
    use HasFactory;

    protected $fillable = [
        'ano',
        'etc',
        'estado',
        'jerarquia',
        'institucion',
        'dane',
        'calendario',
        'sector',
        'sede',
        'codigo_dane_sede',
        'consecutivo',
        'zona_sede',
        'jornada',
        'grado_cod',
        'grupo',
        'modelo',
        'motivo',
        'fechaini',
        'fechafin',
        'nui',
        'estrato',
        'sisben_iv',
        'per_id',
        'doc',
        'tioodoc',
        'documento',
        'apellido1',
        'apellido2',
        'nombre1',
        'nombre2',
        'genero',
        'fecha_nacimiento',
        
        
    ];

    
}
