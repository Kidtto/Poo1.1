<?php

require_once '../Clases/Administrador.php';

$conexion = mysqli_connect("localhost", "usuario", "contraseña", "basededatos");

$idTipoCita = $_POST['idTipoCita'];
$nuevoNombre = $_POST['nuevoNombre'];

$administrador = new Administrador($conexion);

$administrador->editarTipoCita($idTipoCita, $nuevoNombre);

?>
