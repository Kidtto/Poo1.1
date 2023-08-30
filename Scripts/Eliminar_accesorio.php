<?php

$conexion = mysqli_connect("localhost", "usuario", "contraseña", "basededatos");


$id = $_POST['id'];


include('Accesorios.php'); 


$accesorios = new Accesorios($conexion);


$accesorios->eliminarAccesorio($id);
?>
