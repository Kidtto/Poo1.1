<?php
include_once "../../Clases/conexion.php";

class Accesorios {
    private $nombre;
    private $cantidad;
    private $precio;
    private $informacion;

    public function __construct($nombre, $cantidad, $precio, $informacion) {
        $this->nombre = $nombre;
        $this->cantidad = $cantidad;
        $this->precio = $precio;
        $this->informacion = $informacion;
    }

    public function AgregarAccesorio($name, $price, $stock, $information){
        $query = "INSERT INTO `accessories`(`name`, `information`, `price`, `stock`, `photo`) VALUES ('$name','$information','$price','$stock','public/images/a2.jpg')";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($query);
        return $resultado;
    }

    public function verAccesorios() {
        $conexion = new conexion();
        $query = "SELECT * FROM accessories";
        $resultado = $conexion->query($query);

        if ($resultado) {
            while ($fila = $resultado->fetch_assoc()) {
                $accessories[] = $fila;
            }
            return $accessories;
        } else {
            return "Error al obtener los Accesorios: ";
        }
    }

    public function editarAccesorio($id, $name, $price, $stock, $information) {
        $query = "UPDATE `accessories` SET `name`='$name',`information`='$information',`price`='$price',`stock`='$stock' WHERE id = $id";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($query);
        return $resultado;
    }

    public static function encontrarAccesorio($id) {
        $conexion = new conexion();
        $query = "SELECT * FROM accessories WHERE id = $id";
        $resultado = $conexion->query($query);

        if ($resultado) {
            while ($fila = $resultado->fetch_assoc()) {
                $accessories[] = $fila;
            }
            return $accessories[0];
        } else {
            return "Error al obtener los Accesorios: ";
        }
    }
    public function eliminarAccesorio($id) {
        $query = "DELETE FROM `accessories` WHERE id = '$id'";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($query);
        return $resultado;
    }

    public function comprarAccesorio($id) {
        $conexion = new conexion();
        $date = date("Y-m-d");
        $query = "INSERT INTO `accessories_sales`(`date`, `method`, `id_accesories`, `id_users`) VALUES ('$date','0','$id','42')";
        $conexion->conect();
        $resultado = $conexion->query($query);
        return $resultado;
    }
}
?>



