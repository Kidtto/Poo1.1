<?php
require_once '/Clases/Accesorios.php'
$conexion = mysqli_connect("localhost", "usuario", "contraseña", "basededatos");

$id = $_POST['id'];

$accesorios = new Accesorios($conexion);

$accesorios->eliminarAccesorio($id);
?>
