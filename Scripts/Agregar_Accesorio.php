<?php

$conexion = mysqli_connect("localhost", "usuario", "contraseña", "basededatos");

$propietario = mysqli_real_escape_string($conexion, $_POST['propietario']);
$precio = mysqli_real_escape_string($conexion, $_POST['precio']);
$informacion = mysqli_real_escape_string($conexion, $_POST['informacion']);


include('Accesorios.php'); 


$accesorios = new Accesorios($conexion);


$accesorios->AgregarAccesorio($propietario, $precio, $informacion);
?>
