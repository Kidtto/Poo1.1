<?php
include 'Citas.php';
require_once '../../Clases/conexion.php';

$id = $_POST['id'];
$cita = Citas::encontrarCita($id);

$conexion = new conexion();
$query = "SELECT MIN(mechanics.id) AS id, specialtys.specialty FROM mechanics INNER JOIN specialtys ON mechanics.id_specialty = specialtys.id GROUP BY id_specialty;";
$resultado = $conexion->query($query);
while ($fila = $resultado->fetch_assoc()) {$mecanicos[] = $fila;}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark px-5">
    <a class="navbar-brand" href="#">Navbar</a>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0"></ul>
        <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">Menu</button>
    </div>
</nav>
<div class="offcanvas offcanvas-end text-bg-dark" id="demo">
  <div class="offcanvas-header">
    <h1 class="offcanvas-title">Opciones</h1>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
  <ul class="list-group ">
    <a class="btn" href="../accesorios/Mostrar.php"><li class="list-group-item bg-dark text-white">Accesorios</li></a>
    <a class="btn" href=""><li class="list-group-item bg-dark text-white">Sedes</li></a>
    <a class="btn" href=""><li class="list-group-item bg-dark text-white">Yates</li></a>
    <a class="btn" href="../citas/Mostrar.php"><li class="list-group-item bg-dark text-white">Agendamiento</li></a>
    <a class="btn" href=""><li class="list-group-item bg-dark text-white">Especialidades</li></a>
    <a class="btn" href=""><li class="list-group-item bg-dark text-white">Mecanicos</li></a>
    <a class="btn" href=""><li class="list-group-item bg-dark text-white">Usuarios</li></a>
    <a class="btn" href=""><li class="list-group-item bg-dark text-white">Marcas</li></a>
    <a class="btn" href=""><li class="list-group-item bg-danger text-white">Cerrar Sesion</li></a>
  </ul>
  </div>
</div>
<div class="container mt-5">
<form action="Actualizar.php" method="POST">
        <div class="mb-3 mt-3">
          <label for="name" class="form-label">Fecha:</label>
          <input value="<?php echo $cita['id'] ?>" type="hidden" class="form-control" id="name" name="id">
          <input value="<?php echo $cita['date'] ?>" type="date" class="form-control" id="name" placeholder="Inserte nombre" name="fecha">
        </div>
        <div class="mb-3 mt-3">
          <label for="name" class="form-label">Hora:</label>
          <input value="<?php echo $cita['hour'] ?>" type="time" class="form-control" id="name" placeholder="Inserte nombre" name="hora">
        </div>
        <label for="name" class="form-label mt-3">Tipo de servicio necesario:</label>
        <select class="form-select" name="mecanico">
          <?php
          foreach ($mecanicos as $mecanico) {          
          ?>
          <option value="<?php echo $mecanico['id']; ?>"><?php echo $mecanico['specialty']; ?></option>
          <?php
          }
          ?>
        </select>
        <button type="submit" class="btn btn-primary mt-4">Crear</button>
      </form>
</div>
</body>
</html>