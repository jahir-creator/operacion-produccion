<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToModel;

class tablados extends Model
{
    
    use HasFactory;
     protected $table = 'tablados';
     protected $guarded = [];//asignacion masiva
}
