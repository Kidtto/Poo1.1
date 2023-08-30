<?php
$conexion = mysqli_connect("localhost", "usuario", "contraseña", "basededatos");

if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

$propietario = mysqli_real_escape_string($conexion, $_POST['propietario']);
$precio = mysqli_real_escape_string($conexion, $_POST['precio']);
$informacion = mysqli_real_escape_string($conexion, $_POST['informacion']);

include('/Clases/Accesorios.php'); 

$accesorios = new Accesorios($conexion);

$accesorios->AgregarAccesorio($propietario, $precio, $informacion);
?>
