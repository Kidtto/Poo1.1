<?php

require_once 'Administrador.php';

$conexion = mysqli_connect("localhost", "usuario", "contraseña", "basededatos");

$idTipoCita = $_POST['idTipoCita'];

$administrador = new Administrador($conexion);

$administrador->eliminarTipoCita($idTipoCita);

?>
