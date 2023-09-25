<?php

require_once '../Clases/Administrador.php';
require_once '../Clases/conexion.php'


$conexion = new conexion();
$conexion->conect();


$nombre = $_POST['nombre'];
$documento = $_POST['documento'];
$especialidad = $_POST['especialidad'];

$administrador = new Administrador($conexion);

$administrador->registrarMecánico($nombre, $documento, $especialidad);

echo "Registro de mecánico exitoso.";
$conexion->close()
?>
