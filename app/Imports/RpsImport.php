<?php

namespace App\Imports;

use App\Models\Rps;
use Maatwebsite\Excel\Concerns\ToModel;

class RpsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Rps([
            'TIPO_DE_DOCUMENTO' => $row[1],
            'NUMERO_DE_DOCUMENTO_DE_IDENTIDAD' => $row[2],
            'documento' => $row[1].":".$row[2],
            'PRIMER_NOMBRE_DEL_TITULAR_DE_DERECHO' => $row[3],
            'SEGUNDO_NOMBRE_DEL_TITULAR_DE_DERECHO' => $row[4],
            'PRIMER_APELLIDO_DEL_TITULAR_DE_DERECHO' => $row[5],
            'SEGUNDO_APELLIDO_DEL_TITULAR_DE_DERECHO' => $row[6],
            'FECHA_DE_NACIMIENTO' => $row[7],
            'GRUPO_ETARIO' => $row[8],
            'PERTENENCIA_ETNICA' => $row[9],
            'Sexo' => $row[10],
            'Grado_Educativo' => $row[11],
            'Tipo_de_complemento' => $row[12],
            'dia_1' => $row[13],
            'dia_2' => $row[14],
            'dia_3' => $row[15],
            'dia_4' => $row[16],
            'dia_5' => $row[17],
            'dia_6' => $row[18],
            'dia_7' => $row[19],
            'dia_8' => $row[20],
            'dia_9' => $row[21],
            'dia_10' => $row[22],
            'dia_11' => $row[23],
            'dia_12' => $row[24],
            'dia_13' => $row[25],
            'dia_14' => $row[26],
            'dia_15' => $row[27],
            'dia_16' => $row[28],
            'dia_17' => $row[29],
            'dia_18' => $row[30],
            'dia_19' => $row[31],
            'dia_20' => $row[32],
            'dia_21' => $row[33],
            'dia_22' => $row[34],
            'dia_23' => $row[35],
            'dia_24' => $row[36],
            'dia_25' => $row[37],
            'dia_26' => $row[38],
            'dia_27' => $row[39],
            'dia_28' => $row[40],
            'dia_29' => $row[41],
            'dia_30' => $row[42],
            'dia_31' => $row[43],
            'MODALIDAD' => $row[44],
            'NO_CLASES' => $row[45],
            'NOVEDADES' => $row[46],
            'TOTAL_DIAS_NO_CONSUMO' => $row[47],
            'SEDE' => $row[48],
            'INSTITUCION' => $row[49],
            'codigo_dane_sede' => $row[50],            
            'SUPERVISOR_OPERDOR' => $row[51],
        ]);
    }

    public function chunkSize(): int
    {
        return 1000;
    }
}
