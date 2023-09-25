<?php
class Yate {
    private $conexion;
    private $propietario;
    private $precio;
    private $informacion;
    private $numeroSerie;
    private $marca;
    private $modelo;

    public function __construct($propietario, $precio, $informacion, $numeroSerie, $marca, $modelo) {
        $this->propietario = $propietario;
        $this->precio = $precio;
        $this->informacion = $informacion;
        $this->numeroSerie = $numeroSerie;
        $this->marca = $marca;
        $this->modelo = $modelo;
    
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
    public function crearYate($propietario, $precio, $informacion, $numeroSerie, $marca, $modelo) {
        $conexion = new conexion();
        
        $query = "INSERT INTO yates (propietario, precio, informacion, numero_serie, marca, modelo) VALUES ('$propietario', $precio, '$informacion', '$numeroSerie', '$marca', '$modelo')";
        $resultado = mysqli_query($this->conexion, $query);

        if ($resultado) {
            echo "Yate creado y almacenado correctamente.";
        } else {
            echo "Error al crear el yate. Intente nuevamente.";
        }
    }



        public function obtenerYates() {
            $conexion = new conexion();
            
            $query = "SELECT * FROM yates";
            $resultado = mysqli_query($this->conexion, $query);
    
            $yates = array();
    
            if ($resultado && mysqli_num_rows($resultado) > 0) {
                while ($fila = mysqli_fetch_assoc($resultado)) {
                    $yates[] = $fila;
                }
            }
    
            return $yates;
        }
    
 public function editarYate($idYate, $nuevoPropietario, $nuevoPrecio, $nuevaInformacion, $nuevoNumeroSerie, $nuevaMarca, $nuevoModelo) {
    $conexion = new conexion();
        
        $query = "UPDATE yates SET propietario = '$nuevoPropietario', precio = $nuevoPrecio, informacion = '$nuevaInformacion', numero_serie = '$nuevoNumeroSerie', marca = '$nuevaMarca', modelo = '$nuevoModelo' WHERE id = $idYate";
        $resultado = mysqli_query($this->conexion, $query);

        if ($resultado) {
            echo "Yate editado correctamente.";
        } else {
            echo "Error al editar el yate. Intente nuevamente.";
        }
    }

    
        
    public function eliminarYate($idYate) {
        $conexion = new conexion();
            $query = "DELETE FROM yates WHERE id = $idYate";
            $resultado = mysqli_query($this->conexion, $query);
    
            if ($resultado) {
                echo "Yate eliminado correctamente.";
            } else {
                echo "Error al eliminar el yate. Intente nuevamente.";
            }
        }
}
