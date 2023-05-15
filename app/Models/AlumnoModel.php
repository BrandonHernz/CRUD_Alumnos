<?php

namespace App\Models;

use CodeIgniter\Model;

class AlumnoModel extends Model
{
  protected $table      = 'alumnos';
  // Uncomment below if you want add primary key
  protected $primaryKey = 'id_alumnos';

  protected $allowedFields = ['nombres', 'apellidos', 'edad', 'genero', 'direccion'];
}
