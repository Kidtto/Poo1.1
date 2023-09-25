<?php

require_once '../Clases/Administrador.php';
require_once '../Clases//conexion.php'
$conexion = new conexion();
$conexion->conect();
$idTipoCita = $_POST['idTipoCita'];

$administrador = new Administrador($conexion);

$administrador->eliminarTipoCita($idTipoCita);
$conexion ->close();
?>
