<?php
require_once 'Clases/conexion.php';

$conexion = new conexion();
$query = "SELECT * FROM yachts";
$resultado = $conexion->query($query);
while ($fila = $resultado->fetch_assoc()) {$yates[] = $fila;}
$query = "SELECT * FROM accessories";
$resultado = $conexion->query($query);
while ($fila = $resultado->fetch_assoc()) {$accesorios[] = $fila;}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdrenaMarine</title>
    <link rel="shortcut icon" href="public/images/favicon.png" type="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .carousel-item img{height: 70vh; object-fit: cover;}
    .card-img-top{height: 40vh; object-fit: cover;}
  </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark px-5">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">AdrenaMarine</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse float-end" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="Vistas/login.html">Iniciar Sesion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Vistas/Registro.HTML">Registrarse</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
          
            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="public/images/p1.jpg" alt="Los Angeles" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="public/images/p2.jpg" alt="Chicago" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="public/images/p3.jpg" alt="New York" class="d-block w-100">
              </div>
            </div>
          
            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
            </button>
          </div>
          <div class="container mt-5">
            <div class="col-12 text-center">
                <h3>Conoce nuestros Yates</h3>
            </div>
            <div class="row mt-5">
              <?php
              foreach ($yates as $yate) {
              ?>
                <div class="col-md-4 col-sm-12 my-3">
                    <div class="card text-white bg-dark">
                      <img class="card-img-top" src="<?php echo $yate['photo'] ?>" alt="Title">
                      <div class="card-body">
                        <h4 class="card-title"><?php echo $yate['model'] ?></h4>
                        <p class="card-text">$ <?php echo $yate['price'] ?></p>
                        <form action="Scripts/yates/Comprar.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $yate['id'] ?>">
                            <input type="submit" value="Comprar" class="btn btn-primary">
                        </form>
                      </div>
                    </div>
                </div>
                <?php
              }
                ?>
            </div>
            <div class="col-12 text-center">
                <h3>Conoce nuestros Accesorios</h3>
            </div>
            <div class="row mt-5">
              <?php
              foreach ($accesorios as $accesorio) {
              ?>
                <div class="col-md-4 col-sm-12 my-3">
                    <div class="card text-white bg-dark">
                      <img class="card-img-top" src="<?php echo $accesorio['photo'] ?>" alt="Title">
                      <div class="card-body">
                        <h4 class="card-title"><?php echo $accesorio['name'] ?></h4>
                        <p class="card-text">$ <?php echo $accesorio['price'] ?></p>
                        <form action="Scripts/accesorios/Comprar.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $accesorio['id'] ?>">
                            <input type="submit" value="Comprar" class="btn btn-primary">
                        </form>
                      </div>
                    </div>
                </div>
                <?php
              }
                ?>
            </div>
          </div>
          <div class="mt-5 p-4 bg-dark text-white text-center">
            <p>Footer</p>
          </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>