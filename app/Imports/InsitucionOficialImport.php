<?php

namespace App\Imports;

use App\Models\InstitucionesOficiales;
use Maatwebsite\Excel\Concerns\ToModel;

class InsitucionOficialImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new InstitucionesOficiales([
            'CodEstable' => $row[0],
            'NomEstable' => $row[1],
            'CodSede' => $row[2],
            'NomSede' => $row[3],
            'Tipo' => $row[4],
            'Zona' => $row[5],
            'Direccion' => $row[6],
            'Telefono' => $row[7],
            'EstadoSede' => $row[8],
            'Niveles' => $row[9],
            'Modelos' => $row[10],
            'Grados' => $row[11],
            'X' => $row[12],
            'Y' => $row[13],
        ]);
    }
}
