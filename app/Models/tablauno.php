<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToModel;

class tablauno extends Model //implements ToModel , WithHeadingRow 
{
  

     use HasFactory;
     protected $table = 'tablauno';
     protected $guarded = [];//asignacion masiva
    
}
