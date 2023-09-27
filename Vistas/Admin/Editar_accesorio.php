<?php
include '../../Scripts/accesorios/Accesorios.php';
$id = $_POST['id'];
$accesorio = Accesorios::encontrarAccesorio($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Accesorio</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <h2 class="text-center">Editar Accesorio</h2>
    <form action="../../Scripts/accesorios/Editar.php" method="post">
      <div class="form-group">
        <label for="propietario">Nombre</label>
        <input type="hidden" class="form-control" id="propietario" value="<?php echo $accesorio['id']; ?>" name="id" placeholder="Ingrese el propietario" required>
        <input type="text" class="form-control" id="propietario" value="<?php echo $accesorio['name']; ?>" name="name" placeholder="Ingrese el propietario" required>
      </div>
      <div class="form-group">
        <label for="propietario">Cantidad disponible</label>
        <input type="text" class="form-control" id="propietario" value="<?php echo $accesorio['stock']; ?>" name="stock" placeholder="Ingrese el propietario" required>
      </div>
      <div class="form-group">
        <label for="precio">Precio</label>
        <input type="number" class="form-control" id="precio" value="<?php echo $accesorio['price']; ?>" name="price" placeholder="Ingrese el precio" required>
      </div>
      <div class="form-group">
        <label for="informacion">Información</label>
        <input type="text" class="form-control" id="precio" value="<?php echo $accesorio['information']; ?>" name="information" placeholder="Ingrese la informacion" required>
      </div>
      <button type="submit" class="btn btn-primary">Guardar Cambios</button>
      <a href="/Vistas/Admin/Accesorios.html" class="btn btn-secondary">Cancelar</a>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
