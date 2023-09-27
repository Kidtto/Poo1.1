<?php
require_once 'Citas.php';

$id = $_POST['id'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$mecanico = $_POST['mecanico'];


$resultado = Citas::editarCita($id,$fecha, $hora, $mecanico);

if ($resultado) {
    header("Location: Mostrar.php");
} else {
    echo "Error al agregar el Cita.";
}
?>