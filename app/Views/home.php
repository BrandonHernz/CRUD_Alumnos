<?= $this->extend('layout/main.php') ?>

<?= $this->Section('title') ?>
CRUD Alumnos
<?= $this->endSection() ?>

<?= $this->Section('content') ?>
<main class="container-sm">
  <section class="d-flex w-50">
    <form class="" action="#">
      <h1>Registro de Estudiantes</h1>
      <h3>Datos Personales</h3>

      <div class="row">
        <!-- Section name -->
        <div class="col-6">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Nombre(s)</label>
          </div>
        </div>

        <!-- Section Surname -->
        <div class="col-6">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Apellido(s)</label>
          </div>
        </div>
      </div>

      <!-- Section Gender -->

      <div class="row">
        <div class="col-7">
          <div class="form-floating">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
              <option value="Femenino">Femenino</option>
              <option value="Masculino">Masculino</option>
            </select>
            <label for="floatingSelect">Género</label>
          </div>
        </div>

        <div class="col-5">
          <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Edad</label>
          </div>
        </div>
      </div>

      <!-- Section address -->
      <div class="row">
        <h3>Dirección</h3>
        <div class="col-8">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Street">
            <label for="floatingInput">Calle</label>
          </div>
        </div>

        <div class="col-4">
          <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" placeholder="Number">
            <label for="floatingInput">Número Ext/Inter</label>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-6">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Colony">
            <label for="floatingInput">Colonia</label>
          </div>
        </div>

        <div class="col-6">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Town">
            <label for="floatingInput">Muncipio</label>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-6">
          <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" placeholder="Postal Code">
            <label for="floatingInput">Código Postal</label>
          </div>
        </div>

        <div class="col-6">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="State">
            <label for="floatingInput">Estado</label>
          </div>
        </div>
      </div>

      <button type="submit" class="btn btn-success">Registar</button>

    </form>
  </section>

</main>
<?= $this->endSection() ?>