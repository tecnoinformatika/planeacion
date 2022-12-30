<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;    
    
    // Declaro los campos que usaré de la tabla 'img_bicicletas' 
    protected $fillable = ['nombre', 'formato', 'institucion_id'];
 
    // Relación Inversa (Opcional)
    public function Imagen()
    {
    	return $this->belongsTo(InstitucionesOficiales::class,'institucion_id','id');
    }

    public function getUrlPathAttribute()
    {
        return \Storage::url($this->nombre);
    }
}
