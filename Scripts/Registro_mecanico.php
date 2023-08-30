<?php

require_once 'Administrador.php';


$conexion = mysqli_connect("localhost", "usuario", "contraseña", "basededatos");


$nombre = $_POST['nombre'];
$documento = $_POST['documento'];
$especialidad = $_POST['especialidad'];

$administrador = new Administrador($conexion);

$administrador->registrarMecánico($nombre, $documento, $especialidad);

echo "Registro de mecánico exitoso.";
?>
