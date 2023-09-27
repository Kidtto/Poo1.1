<?php
require_once '../../Clases/conexion.php';
include 'Yates.php';

$conexion = new conexion();
$query = "SELECT * FROM brands";
$resultado = $conexion->query($query);
while ($fila = $resultado->fetch_assoc()) {$marcas[] = $fila;}

$id = $_POST['id'];
$yate = Yates::obtenerYate($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Yate</title>
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
        <a class="btn" href="../yates/Mostrar.php"><li class="list-group-item bg-dark text-white">yates</li></a>
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
    <div class="container mt-4">
        <h1>Editar Yate</h1>
        <form method="post" action="Actualizar.php">

            <div class="form-group">
                <label for="precio">Precio</label>
                <input value="<?php echo $yate['id'] ?>" type="hidden" class="form-control" id="precio" name="id">
                <input value="<?php echo $yate['price'] ?>" type="number" class="form-control" id="precio" name="price" placeholder="Ingrese el precio del yate">
            </div>
            <div class="form-group">
                <label for="informacion">Información</label>
                <input value="<?php echo $yate['information'] ?>" class="form-control" id="informacion" name="information" rows="3" placeholder="Ingrese información adicional del yate">
            </div>
            <div class="form-group">
                <label for="numero_serie">Número de Serie</label>
                <input value="<?php echo $yate['serie'] ?>" type="text" class="form-control" id="serie" name="serie" placeholder="Ingrese el número de serie del yate">
            </div>
            <label for="name" class="form-label mt-3">Marca:</label>
            <select class="form-select" name="brand">
            <?php
            foreach ($marcas as $marca) {          
            ?>
            <option value="<?php echo $marca['id']; ?>"><?php echo $marca['brand']; ?></option>
            <?php
            }
            ?>
            </select>
            <div class="form-group">
                <label for="modelo">Modelo</label>
                <input value="<?php echo $yate['model'] ?>" type="text" class="form-control" id="modelo" name="model" placeholder="Ingrese el modelo del yate">
            </div>
            <button type="submit" class="btn btn-primary">Editar Yate</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>