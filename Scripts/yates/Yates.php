<?php
include_once "../../Clases/conexion.php";
class Yates {
    private $propietario;
    private $precio;
    private $informacion;
    private $numeroSerie;
    private $marca;
    private $modelo;

    public function __construct($price,$information,$serie,$brand,$model) {
        $this->propietario = 1;
        $this->precio = $price;
        $this->informacion = $information;
        $this->numeroSerie = $serie;
        $this->marca = $brand;
        $this->modelo = $model;
    
    }


    public function getPropietario() {
        return $this->propietario;
    }

    public function setPropietario($propietario) {
        $this->propietario = $propietario;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function getInformacion() {
        return $this->informacion;
    }

    public function setInformacion($informacion) {
        $this->informacion = $informacion;
    }

    public function getNumeroSerie() {
        return $this->numeroSerie;
    }

    public function setNumeroSerie($numeroSerie) {
        $this->numeroSerie = $numeroSerie;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    public function crearYate($price,$information,$serie,$brand,$model) {
        $conexion = new conexion();
        
        $query = "INSERT INTO `yachts`(`model`, `price`, `information`, `serie`, `photo`, `id_users`, `id_brands`) VALUES ('$model','$price','$information','$serie','public/images/p1.jpg','1','$brand')";
        $conexion->conect();
        $resultado = $conexion->query($query);
        return $resultado;
    }



        public function obtenerYates() {
            $conexion = new conexion();
            $query = "SELECT * FROM yachts";
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

        public function obtenerYate($id) {
            $conexion = new conexion();
            $query = "SELECT yachts.*, users.name as 'owner', brands.brand as 'brand' FROM yachts INNER JOIN users ON yachts.id_users = users.id INNER JOIN brands ON yachts.id_brands =brands.id WHERE yachts.id=$id;";
            $resultado = $conexion->query($query);

            if ($resultado) {
                while ($fila = $resultado->fetch_assoc()) {
                    $yate[] = $fila;
                }
                return $yate[0];
            } else {
                return "Error al obtener los Accesorios: ";
            }
        }
    
    public function editarYate($id,$price,$information,$serie,$brand,$model){
        $sql = "UPDATE `yachts` SET `model`='$model',`price`='$price',`information`='$information',`serie`='$serie',`id_brands`='$brand' WHERE id=$id";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);
        return $resultado;
    }

    
        
    public function eliminarYate($idYate) {
            $query = "DELETE FROM yachts WHERE id = $idYate";
            $conexion = new conexion();
            $conexion->conect();
            $resultado = $conexion->query($query);
            return $resultado;
    }

    public function comprarYate($id) {
        $conexion = new conexion();
        $date = date("Y-m-d");
        $query = "INSERT INTO `yacht_sales`(`date`, `id_payment_method`, `id_yachts`, `id_users`) VALUES ('$date','1','$id','42')";
        $conexion->conect();
        $resultado = $conexion->query($query);
        return $resultado;
    }
}
