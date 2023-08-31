<?php
require_once '../Clases/conexion.php';
require_once '../Clases/Accesorios.php';

$conexionObj = new Conexion();
$conexionObj->conect();

$id = $_POST['id'];
$propietario = $_POST['propietario'];
$precio = $_POST['precio'];
$informacion = $_POST['informacion'];

$accesorios = new Accesorios($conexion, $id, $propietario, $precio, $informacion);

$resultado = $accesorios->editarAccesorio($id, $propietario, $precio, $informacion);

mysqli_close($conexion);
?>
