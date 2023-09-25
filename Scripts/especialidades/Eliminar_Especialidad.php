<?php
require_once '../Clases/conexion.php'
$conexion = new conexion();
$conexion->conect();

$idEspecialidad = $_POST['especialidad'];


include('../Clases/Administrador.php'); 


$administrador = new Administrador($conexion);


$administrador->eliminarEspecialidad($idEspecialidad);
$conexion ->close();
?>
