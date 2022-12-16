<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rps extends Model
{
    use HasFactory;

    protected $fillable = [
        'TIPO_DE_DOCUMENTO',
        'NUMERO_DE_DOCUMENTO_DE_IDENTIDAD',
        'documento',
        'PRIMER_NOMBRE_DEL_TITULAR_DE_DERECHO',
        'SEGUNDO_NOMBRE_DEL_TITULAR_DE_DERECHO',
        'PRIMER_APELLIDO_DEL_TITULAR_DE_DERECHO',
        'SEGUNDO_APELLIDO_DEL_TITULAR_DE_DERECHO',
        'FECHA_DE_NACIMIENTO',
        'GRUPO_ETARIO',
        'PERTENENCIA_ETNICA',
        'Sexo',
        'Grado_Educativo',
        'Tipo_de_complemento',
        'dia_1',
        'dia_2',
        'dia_3',
        'dia_4',
        'dia_5',
        'dia_6',
        'dia_7',
        'dia_8',
        'dia_9',
        'dia_10',
        'dia_11',
        'dia_12',
        'dia_13',
        'dia_14',
        'dia_15',
        'dia_16',
        'dia_17',
        'dia_18',
        'dia_19',
        'dia_20',
        'dia_21',
        'dia_22',
        'dia_23',
        'dia_24',
        'dia_25',
        'dia_26',
        'dia_27',
        'dia_28',
        'dia_29',
        'dia_30',
        'dia_31',
        'MODALIDAD',
        'NO_CLASES',
        'NOVEDADES',
        'TOTAL_DIAS_NO_CONSUMO',
        'SEDE',
        'INSTITUCION',
        'observacionesMatricula',
        'codigo_dane_sede',
        'SUPERVISOR_OPERDOR'

    ];
}
