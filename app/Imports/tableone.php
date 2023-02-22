<?php

namespace App\Imports;

use App\Models\tablauno;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Maatwebsite\Excel\Concerns\ToModel;

class tableone implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
   
    public function model(array $row)
    {
        return new tablauno([
            'numero' => $row[0] ,
             'denominacion' => $row[1] ,
             'nombre' => $row[2] ,
             'id_area' => $row[3],
        ]);
    }
}
