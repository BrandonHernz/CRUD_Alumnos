<?= $this->extend('layout/main.php') ?>

<?= $this->Section('title') ?>
CRUD Alumnos | Tabla de Registros
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
        <th scope="col">Dirección</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($alumnos as $alumno) : ?>
        <tr>
          <td><?= $alumno['id_alumno'] ?></td>
          <td><?= $alumno['nombres'] ?></td>
          <td><?= $alumno['apellidos'] ?></td>
          <td><?= $alumno['genero'] ?></td>
          <td><?= $alumno['edad'] ?></td>
          <td><?= $alumno['direccion'] ?></td>
          <td>
            <a href="<?= base_url() . 'obtenerAlumno/' . $alumno['id_alumno'] ?>" class="btn btn-primary btn-sm">Editar</a>
            <a href="<?= base_url() . 'eliminarAlumno/' . $alumno['id_alumno'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
          </td>
        </tr>
      <?php endforeach; ?>

    </tbody>
  </table>
</main>
<?= $this->endSection() ?>