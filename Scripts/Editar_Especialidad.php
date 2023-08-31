<?php
require_once '../Clases/conexion.php'
$conexionObj = new Conexion();
$conexionObj->conect();

$nuevoNombre = $_POST['nombre'];


$idEspecialidad = $_POST['id']; 


include('../Clases/Administrador.php');


$administrador = new Administrador($conexion);

$administrador->editarEspecialidad($idEspecialidad, $nuevoNombre);
?>
