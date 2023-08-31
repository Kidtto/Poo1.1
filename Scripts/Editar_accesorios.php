<?php
require_once '../Clases/conexion.php';
require_once '../Clases/Accesorios.php';

$conexion = mysqli_connect("localhost", "root", "", "yates");

if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

$id = $_POST['id'];
$propietario = $_POST['propietario'];
$precio = $_POST['precio'];
$informacion = $_POST['informacion'];

$accesorios = new Accesorios($conexion, $id, $propietario, $precio, $informacion);

$resultado = $accesorios->editarAccesorio($id, $propietario, $precio, $informacion);

mysqli_close($conexion);
?>
