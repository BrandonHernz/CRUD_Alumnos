<?= $this->extend('layout/main.php') ?>

<?= $this->Section('title') ?>
CRUD Alumnos
<?= $this->endSection() ?>

<?= $this->Section('content') ?>

<main class="container-sm mt-4">
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre(s)</th>
        <th scope="col">Apellido(s)</th>
        <th scope="col">Género</th>
        <th scope="col">Edad</th>
        <th scope="col">Estado</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">ID</th>
        <td>DATA</td>
        <td>DATA</td>
        <td>DATA</td>
        <td>DATA</td>
        <td>DATA</td>
        <td>DATA</td>
        <td>
      <a href="#" class="btn btn-primary btn-sm">Editar</a>
      <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
        </td>
      </tr>
    </tbody>
  </table>
</main>
<?= $this->endSection() ?>