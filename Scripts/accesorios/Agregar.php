<?php
require_once 'Accesorios.php';

$name = $_POST['name'];
$price = $_POST['price'];
$stock = $_POST['stock'];
$information = $_POST['information'];

$accesorios = new Accesorios($name, $price, $stock, $information);


$resultado = $accesorios->AgregarAccesorio($name, $price, $stock, $information);

if ($resultado) {
    header("Location: Mostrar.php");
} else {
    echo "Error al agregar el accesorio.";
}
?>