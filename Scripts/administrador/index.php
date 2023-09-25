<?php
include_once 'Administrador.php';
$sales_yachts = Administrador::all_yachts();
$sales_accesories = Administrador::all_accessories();
$counts = Administrador::all();
$sum_yachts = Administrador::sum_yachts();
$sum_accessories = Administrador::sum_accessories();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
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
    <a class="btn" href=""><li class="list-group-item bg-dark text-white">Agendamiento</li></a>
    <a class="btn" href=""><li class="list-group-item bg-dark text-white">Especialidades</li></a>
    <a class="btn" href=""><li class="list-group-item bg-dark text-white">Mecanicos</li></a>
    <a class="btn" href=""><li class="list-group-item bg-dark text-white">Usuarios</li></a>
    <a class="btn" href=""><li class="list-group-item bg-dark text-white">Marcas</li></a>
    <a class="btn" href=""><li class="list-group-item bg-danger text-white">Cerrar Sesion</li></a>
  </ul>
  </div>
</div>

<div class="container-fluid mt-3">
<div class="row">
    <div class="col-md-9 col-sm-12">
        <canvas id="yachts" style="width:100%;"></canvas>
        <canvas id="accessories" style="width:100%;"></canvas>
        <canvas id="type" style="width:100%;"></canvas>
    </div>
<div class="col-md-3 col-sm-12">
<div class="row">
<h3>Ventas de articulos</h3>
<?php foreach ($sales_accesories as $sales_accesorie) : ?>
  <div class="col-sm-12">
    <div class="card bg-light">
      <div class="card-body">
        <h4 class="card-title"><?php echo $sales_accesorie['accessory'];?> </h4>
        <p class="card-text"><?php echo $sales_accesorie['user'];?></p>
        <p class="card-text"><?php echo $sales_accesorie['date'];?></p>
        <p class="card-text">$ <?php echo $sales_accesorie['price'];?>.000</p>
      </div>
    </div>
  </div>
<?php endforeach; ?>
</div>
</div>
<script>
var xValues = ["ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO", "JULIO", "AGOSTO", "SEPTIEMBRE","OCTUBRE", "NOVIEMBRE","DICIEMBRE"];
var barColors = ["red", "green","blue","#06C036","brown", "red", "green","blue","#06C036","brown","red", "green"];

new Chart("yachts", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: [<?php foreach ($sum_yachts as $data) {
        echo $data.",";
      } ?>]
    }]
  },
  options: {
    title: {
      display: true,
      text: "Ventas de Yates realizadas"
    }
  }
});

new Chart("accessories", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data:[<?php foreach ($sum_accessories as $data) {
        echo $data.",";
      } ?>]
    }]
  },
  options: {
    title: {
      display: true,
      text: "Ventas de Accesorios realizadas"
    }
  }
});

var xValues = ["Yates", "Accesorios"];
var yValues = [<?php echo $counts[0]['yachts'].",".$counts[0]['accessories'];?>];
var barColors = [
  "#06C01A",
  "#0E06C0",
];

new Chart("type", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Tipos de ventas realizadas"
    }
  }
});
</script>
</body>
</html>
