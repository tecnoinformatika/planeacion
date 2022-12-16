<?php

namespace App\Imports;

use App\Models\Institucion;
use Maatwebsite\Excel\Concerns\ToModel;

class InstitucionImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Institucion([
            'codigo_dane' => $row[0],
            'nombre' => $row[1]
        ]);
    }
}
