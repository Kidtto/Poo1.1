<?php

$conexion = mysqli_connect("localhost", "usuario", "contraseña", "basededatos");


$idEspecialidad = $_POST['especialidad'];


include('Administrador.php'); 


$administrador = new Administrador($conexion);


$administrador->eliminarEspecialidad($idEspecialidad);
?>
