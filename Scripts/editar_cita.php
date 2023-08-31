<?php
require_once '../Clases/conexion.php'
require_once '../Clases/Administrador.php';
$conexionObj = new Conexion();
$conexionObj->conect();
$conexion = mysqli_connect("localhost", "usuario", "contraseña", "basededatos");

$idTipoCita = $_POST['idTipoCita'];
$nuevoNombre = $_POST['nuevoNombre'];

$administrador = new Administrador($conexion);

$administrador->editarTipoCita($idTipoCita, $nuevoNombre);

?>
