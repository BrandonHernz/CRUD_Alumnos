<?= $this->extend('layout/main.php') ?>

<?= $this->Section('title') ?>
CRUD Alumnos | Editar
<?= $this->endSection() ?>

<?= $this->Section('content') ?>
<h1 class="h1 my-4">Editar Alumno</h1>
<form action="<?= base_url() . 'actualizarAlumno/' . $alumno['id_alumno'] ?>" method="post">
  <div class="row mb-3">

    <div class="col-lg-3">

      <div class="form-floating">
        <input readonly class="form-control" id="idInput" placeholder="ID Alumno" name="id" value="<?= $alumno['id_alumno'] ?>" />
        <label for="idInput">ID Alumno</label>
      </div>

    </div>

    <div class="col-lg-3">
      <div class="form-floating">
        <input type="text" class="form-control" id="nameInput" placeholder="Nombre(s)" name="nombre" value="<?= $alumno['nombres'] ?>" />
        <label for="nameInput">Nombres(s)</label>
      </div>
    </div>

    <div class="col-lg-3">
      <div class="form-floating">
        <input type="text" class="form-control" id="surnameInput" placeholder="Apellido(s)" name="apellido" value="<?= $alumno['apellidos'] ?>" />
        <label for="surnameInput">Apellido(s)</label>
      </div>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-lg-2">
      <div class="form-floating">
        <select class="form-select" id="selectGender" aria-label="Select Gender" name="genero">
          <?php if ($alumno['genero'] == 'Masculino') : ?>
            <option selected value="Masculino">Hombre</option>
            <option value="Femenino">Mujer</option>
          <?php else : ?>
            <option selected value="Femenino">Mujer</option>
            <option value="Masculino">Hombre</option>
          <?php endif; ?>
        </select>
        <label for="selectGender">Género</label>
      </div>
    </div>

    <div class="col-lg-1">
      <div class="form-floating">
        <input type="number" class="form-control" id="ageInput" placeholder="Edad" name="edad" value="<?= $alumno['edad'] ?>" />
        <label for="ageInput">Edad</label>
      </div>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-lg-6">
      <div class="form-floating">
        <textarea class="form-control" placeholder="Domicilio" id="addressInput" style="height: 100px" name="domicilio"><?= $alumno['direccion'] ?></textarea>
        <label for="addressInput">Domicilio</label>
      </div>
    </div>
  </div>

  <div class="d-grid col-2">
    <button type="submit" class="btn btn-success">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
        <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z" />
      </svg>
      Guardar
    </button>
  </div>
</form>
<?= $this->endSection() ?>