<?php
require_once '../Clases/conexion.php'
require_once '../Clases/Yates.php';
$conexion = new conexion();
$conexion->conect();

if(isset($_POST['propietario']) && isset($_POST['precio']) && isset($_POST['informacion']) &&
   isset($_POST['numero_serie']) && isset($_POST['marca']) && isset($_POST['modelo'])) {

    $propietario = $_POST['propietario'];
    $precio = $_POST['precio'];
    $informacion = $_POST['informacion'];
    $numeroSerie = $_POST['numero_serie'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];

 
    $yate = new Yate($conexion);

    $yate->crearYate($propietario, $precio, $informacion, $numeroSerie, $marca, $modelo);

    mysqli_close($conexion);
} else {
    echo "Faltan campos del formulario.";
}
?>
