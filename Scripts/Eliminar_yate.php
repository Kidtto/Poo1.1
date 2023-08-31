<?php

require_once '../Clases/Yates.php';
require_once '../Clases/conexion.php'

$conexion = new conexion();
$conexion->conect();

$idYate = $_POST['id_yate'];


$yate = new Yate($conexion);

$yate->eliminarYate($idYate);
$conexion-> close()
?>
