<?php
include 'Citas.php';
$citas = Citas::verCitas();
?> <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .img-table{width: 120px; height: 100px; object-fit: cover;}
  </style>

<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          events: [
            <?php foreach ($citas as $cita) : ?>
            {
                title: '<?php echo $cita['user'];?> - <?php echo $cita['specialty'];?> - <?php echo $cita['hour'];?>',
                start: '<?php echo $cita['date'];?>',
                color: '#063BC0',
                textColor: '#ffffff',
            },
          <?php endforeach; ?>
        ],
        });
        calendar.render();
      });

    </script>
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
    <div class="col-md-3 col-sm-6">
      <a href="Crear.php" class="btn btn-success">Agendar</a>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
<div id='calendar'></div>
    </div>
<div class="col-sm-12">
<div class="row">
<?php foreach ($citas as $cita) : ?>
  <div class="col-md-3 col-sm-12 my-3">
    <div class="card bg-dark text-white">
      <div class="card-body">
        <h4 class="card-title"><?php echo $cita['specialty'];?> - <?php echo $cita['user'];?></h4>
        <p class="card-text"><?php echo $cita['date'];?></p>
        <p class="card-text"><?php echo $cita['hour'];?></p>
        <form action="Editar.php" method="post">
          <input type="hidden" name="id" value="<?php echo $cita['id'];?>">
          <input type="submit" class="btn btn-success" value="Editar">
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?>
</div>
</div>
</body>
</html>
