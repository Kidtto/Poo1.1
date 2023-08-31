<?php

require_once '../Clases/Yate.php';
require_once ' ../Clases/conexion.php'
$conexion = new conexion();
$conexion->conect();
$yate = new Yate($conexion);

$listaDeYates = $yate->obtenerYates();
$conexion ->close()
?>

<!DOCTYPE html>
<html lang="en">
<head>
 
</head>
<body>
    <h1>Lista de Yates</h1>
    <ul>
        <?php foreach ($listaDeYates as $yate) : ?>
            <li>
                <strong>Propietario:</strong> <?php echo $yate['propietario']; ?><br>
                <strong>Precio:</strong> <?php echo $yate['precio']; ?><br>
                <strong>Número de Serie:</strong> <?php echo $yate['numero_serie']; ?><br>
               
            </li>
            <br>
        <?php endforeach; ?>
    </ul>
</body>
</html>
$conexion ->close()