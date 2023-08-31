<?php
require_once '/Clases/Administrador.php'
require_once '../Clases/conexion.php'
$conexionObj = new Conexion();
$conexionObj->conect();


$id = $_POST['id'];
$nombre = $_POST['nombre'];
$documento = $_POST['documento'];
$especialidad = $_POST['especialidad'];

$query = "UPDATE mecanicos SET nombre='$nombre', documento='$documento', especialidad='$especialidad' WHERE id=$id";


$resultado = mysqli_query($conexion, $query);

if ($resultado) {
    echo "Información del mecánico actualizada exitosamente.";
} else {
    echo "Error al actualizar la información del mecánico: " . mysqli_error($conexion);
}
$conexion ->close();
?>
