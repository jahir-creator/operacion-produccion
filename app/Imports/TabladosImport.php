<?php

namespace App\Imports;

use App\Models\tablados;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TabladosImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new tablados([
           
                'numero' => $row[0] ,
                 'denominacion' => $row[1] ,
                 'nombre' => $row[2] ,
                 'correo' => $row[3],
                 'contrasena' => $row[4],
                 'id_area' => $row[5],
            
        ]);
    }
}
 