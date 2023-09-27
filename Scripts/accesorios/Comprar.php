<?php
require_once '../../Clases/conexion.php';
include 'Accesorios.php';

$conexion = new conexion();
$query = "SELECT * FROM brands";
$resultado = $conexion->query($query);
while ($fila = $resultado->fetch_assoc()) {$marcas[] = $fila;}

$id = $_POST['id'];
$accesorio = Accesorios::encontrarAccesorio($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear accesorio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .img{width: 100%;}
  </style>
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
        <a class="btn" href="../accesorios/Mostrar.php"><li class="list-group-item bg-dark text-white">accesorios</li></a>
        <a class="btn" href=""><li class="list-group-item bg-dark text-white">Sedes</li></a>
        <a class="btn" href=""><li class="list-group-item bg-dark text-white">accesorios</li></a>
        <a class="btn" href="../citas/Mostrar.php"><li class="list-group-item bg-dark text-white">Agendamiento</li></a>
        <a class="btn" href=""><li class="list-group-item bg-dark text-white">Especialidades</li></a>
        <a class="btn" href=""><li class="list-group-item bg-dark text-white">Mecanicos</li></a>
        <a class="btn" href=""><li class="list-group-item bg-dark text-white">Usuarios</li></a>
        <a class="btn" href=""><li class="list-group-item bg-dark text-white">Marcas</li></a>
        <a class="btn" href=""><li class="list-group-item bg-danger text-white">Cerrar Sesion</li></a>
      </ul>
      </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-6">
                <img class="img" src="../../<?php echo $accesorio['photo']; ?>" alt="">
            </div>
            <div class="col-6">
            <ul class="list-group">
                <li class="list-group-item">Nombre: <?php echo $accesorio['name']; ?></li>
                <li class="list-group-item">Precio: $<?php echo $accesorio['price']; ?></li>
                <li class="list-group-item">Información: <?php echo $accesorio['information']; ?></li>
            </ul>
            <form action="procesar_compra.php" method="post" class="pt-3">
                <input type="hidden" name="id" value="<?php echo $accesorio['id'] ?>">
                <input type="submit" value="Confirmar Compra" class="btn btn-success">
            </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>