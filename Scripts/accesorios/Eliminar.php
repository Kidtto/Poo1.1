<?php
require_once 'Accesorios.php';

$id = $_POST['id'];



$resultado = accesorios::eliminarAccesorio($id);

if ($resultado) {
    header("Location: Mostrar.php");
} else {
    echo "Error al agregar el accesorio.";
}
?>