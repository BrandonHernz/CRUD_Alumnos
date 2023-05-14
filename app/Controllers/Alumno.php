<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AlumnoModel;

class Alumno extends Controller
{
  public function index()
  {
    return view('alumnos');
  }

  public function guardarAlumno()
  {
    $validation = service('validation');
    $validation->setRules([
      'nombres'     => 'required|alpha_space',
      'apellidos'  => 'required|alpha_space',
      'genero'   => 'required',
      'edad' => 'required',
      'direccion' => 'required',
    ]);

    if (!$validation->withRequest($this->request)->run()) {
      return redirect()->back()->withInput()->with('errors', $validation->getErrors());
    }

    $datosForm = [
      'nombres'     => $this->request->getVar('nombres'),
      'apellidos'  => $this->request->getVar('apellidos'),
      'genero'   => $this->request->getVar('genero'),
      'edad' => $this->request->getVar('edad'),
      'direccion' => $this->request->getVar('direccion'),
    ];

    $alumno = new AlumnoModel();
    $alumno->save($datosForm);
  }
}
