<?php

$conexion = mysqli_connect("localhost", "usuario", "contraseña", "basededatos");


$idEspecialidad = $_POST['especialidad'];


include('../Clases/Administrador.php'); 


$administrador = new Administrador($conexion);


$administrador->eliminarEspecialidad($idEspecialidad);
?>
