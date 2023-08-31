<?php

require_once '../Clases/Yates.php';

$conexion = mysqli_connect("localhost", "usuario", "contraseña", "basededatos");
$idYate = $_POST['id_yate'];
$nuevoPropietario = $_POST['propietario'];
$yate = new Yate($conexion);
$yate->editarYate($idYate, $nuevoPropietario, $nuevoPrecio, $nuevaInformacion, $nuevoNumeroSerie, $nuevaMarca, $nuevoModelo);
?>
