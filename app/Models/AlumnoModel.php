<?php

namespace App\Models;

use CodeIgniter\Model;

class AlumnoModel extends Model
{
  protected $table      = 'estudiante';
  // Uncomment below if you want add primary key
  protected $primaryKey = 'id_estudiante';

  protected $allowedFields = ['nombres', 'apellidos', 'edad', 'genero', 'direccion'];
}
