<?php

namespace App\Imports;

use App\Models\Cupos;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportCupos implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Cupos([
            'CodSede' => $row[0],
            'jornada' => $row[1],
            'grado' => $row[2],
            'cupos' => $row[3]
        ]);
    }
}
