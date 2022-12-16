<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class consolidado extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'codigo_dane_sede',
        'jornada_tipo_racion',
        'dia1',
        'dia2',
        'dia3',
        'dia4',
        'dia5',
        'dia6',
        'dia7',
        'dia8',
        'dia9',
        'dia10',
        'dia11',
        'dia12',
        'dia13',
        'dia14',
        'dia15',
        'dia16',
        'dia17',
        'dia18',
        'dia19',
        'dia20',
        'dia21',
        'dia22',
        'dia23',
        'dia24',
        'dia25',
        'dia26',
        'dia27',
        'dia28',
        'dia29',
        'dia30',
        'dia31',
        'N_dias_atendidos',
        'total_raciones',
        'novedades',
        'devoluciones',
        'consolidado'
    ];

    /**
     * Get the user that owns the consolidado
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
