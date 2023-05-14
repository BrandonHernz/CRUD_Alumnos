<?= $this->extend('layout/main.php') ?>

<?= $this->Section('title') ?>
CRUD Alumnos
<?= $this->endSection() ?>

<?= $this->Section('content') ?>
<main class="container-sm">
  <section class="d-flex w-50">
    <form action="<?= base_url('registrarAlumno') ?>" method="POST">
      <h1>Registro de Estudiantes</h1>
      <h3>Datos Personales</h3>

      <div class="row">
        <!-- Section name -->
        <div class="col-6">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Nombre(s)" name="nombres">
            <label for="floatingInput">Nombre(s)</label>
          </div>
        </div>

        <!-- Section Surname -->
        <div class="col-6">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Apellido(s)" name="apellidos">
            <label for="floatingInput">Apellido(s)</label>
          </div>
        </div>
      </div>

      <!-- Section Gender -->

      <div class="row">
        <div class="col-7">
          <div class="form-floating">
            <select class="form-select" id="floatingSelect" aria-label="Selector" name="genero">
              <option value="Femenino">Femenino</option>
              <option value="Masculino">Masculino</option>
            </select>
            <label for="floatingSelect">Género</label>
          </div>
        </div>

        <div class="col-5">
          <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" placeholder="Edad" name="edad">
            <label for="floatingInput">Edad</label>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="co-12">
          <div class="form-floating">
            <textarea class="form-control" placeholder="Dirección" id="floatingTextarea2" style="height: 100px" name="direccion"></textarea>
            <label for="floatingTextarea2">Dirección</label>
          </div>
        </div>

      </div>

      <button type="submit" class="btn btn-success">Registar</button>

    </form>
  </section>

</main>
<?= $this->endSection() ?>