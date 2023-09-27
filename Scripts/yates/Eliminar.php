<?php
require_once 'Yates.php';


$idYate = $_POST['id'];

$resultado = Yates::eliminarYate($idYate);

if ($resultado) {
    header("Location: Ver.php");
} else {
    echo "Error al eliminar el yate.";
}
?>