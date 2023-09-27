<?php

require_once 'Accesorios.php';

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$stock = $_POST['stock'];
$information = $_POST['information'];

$resultado = Accesorios::editarAccesorio($id, $name, $price, $stock, $information);
if ($resultado){
    header("location: Mostrar.php");
}

?>
