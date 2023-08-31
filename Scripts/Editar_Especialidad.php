<?php

$conexion = mysqli_connect("localhost", "usuario", "", "");

$nuevoNombre = $_POST['nombre'];


$idEspecialidad = $_POST['id']; 


include('../Clases/Administrador.php');


$administrador = new Administrador($conexion);

$administrador->editarEspecialidad($idEspecialidad, $nuevoNombre);
?>
