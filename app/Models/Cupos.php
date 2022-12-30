<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cupos extends Model
{
    use HasFactory;

    protected $fillable = [
        'CodSede',
        'jornada',
        'grado',
        'cupos',
    ];
}
