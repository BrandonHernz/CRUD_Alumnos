<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AlumnoModel;

class AlumnoController extends Controller
{
  public function home()
  {
    return view('home');
  }

  public function tableStudents()
  {
    return view('alumnos');
  }

  public function saveStudent()
  {
    $datosForm = [
      'nombres'     => $this->request->getVar('nombre'),
      'apellidos'  => $this->request->getVar('apellido'),
      'genero'   => $this->request->getVar('genero'),
      'edad' => $this->request->getVar('edad'),
      'direccion' => $this->request->getVar('domicilio'),
    ];

    $alumno = new AlumnoModel();
    $alumno->save($datosForm);
  }
}
