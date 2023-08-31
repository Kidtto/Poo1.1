<?php

require_once '../Clases/Conexion.php';
require_once '../Clases/Accesorios.php';

$conexion = new conexion();
$conexion->conect();

$id = $_POST['id'];

$accesorios = new Accesorios($conexion);

$accesorios->eliminarAccesorio($id);
?>
