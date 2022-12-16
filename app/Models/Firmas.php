<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Firmas extends Model
{
    use HasFactory;    
    
    // Declaro los campos que usaré de la tabla 'img_bicicletas' 
    protected $fillable = ['nombre', 'formato', 'user_id'];
 
    // Relación Inversa (Opcional)
    public function firma()
    {
    	return $this->belongsTo(User::class);
    }

    public function getUrlPathAttribute()
    {
        return \Storage::url($this->nombre);
    }
}
