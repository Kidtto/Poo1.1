<?php
include_once 'Accesorios.php';
$accesorios = Accesorios::verAccesorios();
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
    <a class="btn" href="../yates/Ver.php"><li class="list-group-item bg-dark text-white">Yates</li></a>
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
  <div class="row">
    <a href="../../Vistas/Admin/Agregar_Accesorios.html" class="btn btn-success">Agregar accesorio</a>
    <?php foreach ($accesorios as $accesorio) {?>
        <div class="col-md-4 col-sm-12">
            <div class="card text-white bg-primary">
              <img class="card-img-top" src="../../<?php echo $accesorio['photo'] ?>" alt="Title">
              <div class="card-body">
                <h4 class="card-title"><?php echo $accesorio['name'] ?></h4>
                <p class="card-text"><?php echo $accesorio['price'] ?></p>
                <p class="card-text"><?php echo $accesorio['information'] ?></p>
                <form action="../../Vistas/Admin/Editar_accesorio.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $accesorio['id'] ?>">
                    <input type="submit" value="Editar" class="btn btn-success">
                </form>
                <form action="Eliminar.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $accesorio['id'] ?>">
                    <input type="submit" value="Eliminar" class="btn btn-danger">
                </form>
              </div>
            </div>
        </div>
    <?php } ?>
  </div>
</div>

</body>
</html>
