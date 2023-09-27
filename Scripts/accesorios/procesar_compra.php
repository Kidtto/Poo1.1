<?php
require_once 'Accesorios.php';


$idAccesorio = $_POST['id'];

$resultado = Accesorios::comprarAccesorio($idAccesorio);

if ($resultado) {
    header("Location: Mostrar.php");
} else {
    echo "Error al comprar el Accesorio.";
}
?>