<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Alumno extends Controller
{
  public function index()
  {
    return view('alumnos');
  }
}
