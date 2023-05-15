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
    $model = new AlumnoModel();
    $data['alumnos'] = $model->findAll();
    return view('alumnos', $data);
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
    return redirect()->route('Alumnos');
  }

  public function getStudent($idStudent)
  {
    $model = new AlumnoModel();
    $data['alumno'] = $model->find($idStudent);
    return view('editar', $data);
  }


  public function updateStudent($idStudent)
  {
    $model = new AlumnoModel();

    $newData = [
      'nombres'     => $this->request->getVar('nombre'),
      'apellidos'  => $this->request->getVar('apellido'),
      'genero'   => $this->request->getVar('genero'),
      'edad' => $this->request->getVar('edad'),
      'direccion' => $this->request->getVar('domicilio'),
    ];

    $model->update($idStudent, $newData);
    return redirect()->route('Alumnos');
  }

  public function deleteStudent($idStudent)
  {
    $model = new AlumnoModel();
    $model->delete($idStudent);
    return redirect()->route('Alumnos');
  }
}
