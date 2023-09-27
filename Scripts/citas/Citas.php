<?php
include_once "../../Clases/conexion.php";

class Citas {
    private $fecha;
    private $hora;
    private $mecanico;

    public function __construct($fecha, $hora, $mecanico) {
        $this->fecha = $fecha;
        $this->hora = $hora;
        $this->mecanico = $mecanico;
    }

    public function AgregarCita($fecha, $hora, $mecanico, $id_users){
        $query = "INSERT INTO `quotes`(`date`, `hour`, `id_mechanics`, `id_users`) VALUES ('$fecha','$hora','$mecanico','$id_users')";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($query);
        return $resultado;
    }

    public function verCitas() {
        $conexion = new conexion();
        $query = "SELECT quotes.*, specialtys.specialty, users.name as user FROM `quotes` INNER JOIN mechanics ON quotes.id_mechanics = mechanics.id INNER JOIN specialtys ON mechanics.id_specialty = specialtys.id INNER JOIN users ON quotes.id_users = users.id";
        $resultado = $conexion->query($query);

        if ($resultado) {
            while ($fila = $resultado->fetch_assoc()) {
                $quotes[] = $fila;
            }
            return $quotes;
        } else {
            return "Error al obtener los Citas: ";
        }
    }

    public function editarCita($id, $fecha, $hora, $mecanico) {
        $query = "UPDATE `quotes` SET `date`='$fecha',`hour`='$hora',`id_mechanics`='$mecanico' WHERE id='$id'";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($query);
        return $resultado;
    }

    public static function encontrarCita($id) {
        $conexion = new conexion();
        $query = "SELECT * FROM quotes WHERE id = $id";
        $resultado = $conexion->query($query);

        if ($resultado) {
            while ($fila = $resultado->fetch_assoc()) {
                $quotes[] = $fila;
            }
            return $quotes[0];
        } else {
            return "Error al obtener los Citas: ";
        }
    }
    public function eliminarCita($id) {
        $query = "DELETE FROM `quotes` WHERE id = '$id'";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($query);
        return $resultado;
    }
}
?>



