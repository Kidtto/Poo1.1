<?php

require_once '../Clases/Yates.php';
require_once '../Clases/conexion.php'



$idYate = $_POST['id_yate'];
$nuevoPropietario = $_POST['propietario'];
$yate = new Yate($conexion);
$yate->editarYate($idYate, $nuevoPropietario, $nuevoPrecio, $nuevaInformacion, $nuevoNumeroSerie, $nuevaMarca, $nuevoModelo);
$conexion ->close();
?>
