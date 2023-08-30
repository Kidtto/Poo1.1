<?php

$conexion = mysqli_connect("localhost", "usuario", "contraseña", "basededatos");


$id = $_POST['id'];
$propietario = $_POST['propietario'];
$precio = $_POST['precio'];
$informacion = $_POST['informacion'];


include('Accesorios.php'); 


$accesorios = new Accesorios($conexion);


$accesorios->editarAccesorio($id, $propietario, $precio, $informacion);
?>
