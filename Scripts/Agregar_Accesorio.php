<?php
require_once '../Clases/conexion.php';
require_once '../Clases/Accesorios.php';

$conexion = new Conexion();
$propietario = $_POST['propietario'];
$precio = $_POST['precio'];
$informacion = $_POST['informacion'];
$imagen = $_POST['imagen'];

$accesorios = new Accesorios($conexion, $propietario, $precio, $informacion);


$resultado = $accesorios->AgregarAccesorio();

if ($resultado) {
    echo "Accesorio agregado correctamente.";
} else {
    echo "Error al agregar el accesorio.";
}
?>
