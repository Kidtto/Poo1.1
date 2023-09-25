<?php
require_once '../Clases/Conexion.php';
require_once '../Clases/Mecanico.php';

$conexionObj = new Conexion();
$conexionObj->conect();

$idMecanico = $_POST['id_mecanico'];

if ($idMecanico === '') {
    echo "ID de mecánico no proporcionado.";
} else {
    $mecanico = new Mecanico($conexionObj->getConexion());
    $resultado = $mecanico->eliminarMecanico($idMecanico);

    if ($resultado) {
        echo "Mecánico eliminado exitosamente.";
    } else {
        echo "Error al eliminar el mecánico.";
    }
}

$conexionObj->close();
?>
