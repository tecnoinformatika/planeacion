<?php

namespace App\Imports;

use App\Models\Sedes;
use Maatwebsite\Excel\Concerns\ToModel;

class SedesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Sedes([
            'consecutivo' => $row[2],
            'nombre' => $row[1],
            'codigo_dane_institucion' => $row[0]
        ]);
    }
}
