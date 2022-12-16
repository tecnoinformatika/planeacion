<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ajustes extends Model
{
    use HasFactory;

    protected $fillable = [
        'totaldiasatencion',
        'incio',
        'fin',
        'cortesimat',
        'programa',
    ];
}
