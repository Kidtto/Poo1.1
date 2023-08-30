<?php

$conexion = mysqli_connect("localhost", "usuario", "contraseña", "basededatos");

$nuevoNombre = $_POST['nombre'];


$idEspecialidad = $_POST['id']; 


include('Administrador.php');


$administrador = new Administrador($conexion);

$administrador->editarEspecialidad($idEspecialidad, $nuevoNombre);
?>
