<?php

require_once '../Clases/Yates.php';



$propietario = $_POST['propietario'];
$precio = $_POST['precio'];
$informacion = $_POST['informacion'];
$numeroSerie = $_POST['numero_serie'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];


$yate = new Yate($conexion);


$yate->crearYate($propietario, $precio, $informacion, $numeroSerie, $marca, $modelo);
?>
