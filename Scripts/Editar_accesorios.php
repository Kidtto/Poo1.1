<?php

$conexion = mysqli_connect("localhost", "usuario", "contraseña", "basededatos");


$id = $_POST['id'];
$propietario = $_POST['propietario'];
$precio = $_POST['precio'];
$informacion = $_POST['informacion'];


include('../Clases/Accesorios.php'); 


$accesorios = new Accesorios($conexion);


$accesorios->editarAccesorio($id, $propietario, $precio, $informacion);
?>
