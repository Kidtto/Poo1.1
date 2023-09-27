<?php
require_once 'Yates.php';


$idYate = $_POST['id'];

$resultado = Yates::comprarYate($idYate);

if ($resultado) {
    header("Location: Ver.php");
} else {
    echo "Error al comprar el yate.";
}
?>