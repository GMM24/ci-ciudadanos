<?php

namespace App\Models;

use CodeIgniter\Model;

class NivelesAcadModel extends Model
{
    protected $table         = 'nivelesacademicos';
    protected $primaryKey = 'cod_nivel_acad';
    protected $allowedFields = [
        'cod_nivel_acad', 'nombre', 'descripcion',
    ];
   
}