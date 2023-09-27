<?php
require_once 'Citas.php';

session_start();
$id = $_SESSION['id'];

$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$mecanico = $_POST['mecanico'];

$citas = new citas($fecha, $hora, $mecanico);


$resultado = $citas->AgregarCita($fecha, $hora, $mecanico,$id);

if ($resultado) {
    header("Location: Mostrar.php");
} else {
    echo "Error al agregar el Cita.";
}
?>