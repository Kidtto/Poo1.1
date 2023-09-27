<?php
require_once 'Yates.php';


$id = $_POST['id'];
$price = $_POST['price'];
$information = $_POST['information'];
$serie = $_POST['serie'];
$brand = $_POST['brand'];
$model = $_POST['model'];

$yates = new Yates($id,$price,$information,$serie,$brand,$model);


$resultado = $yates->editarYate($id,$price,$information,$serie,$brand,$model);

if ($resultado) {
    header("Location: Ver.php");
} else {
    echo "Error al agregar el yate.";
}
?>