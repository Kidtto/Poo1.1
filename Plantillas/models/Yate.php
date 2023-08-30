<?php
class Yates {
    private $Propietario;
    public $Precio;
    public $Informacion;
    public $Marca;
    public $Modelo;
    private $Num_Serie;

    public function __construct($Propietario, $Precio, $Informacion, $Marca, $Modelo, $Num_Serie) {
        $this->Propietario = $Propietario;
        $this->Precio = $Precio;
        $this->Informacion = $Informacion;
        $this->Marca = $Marca;
        $this->Modelo = $Modelo;
        $this->Num_Serie = $Num_Serie;
    }

    
    public static function agregarYate(&$listaYates, $nuevoYate) {
        $listaYates[] = $nuevoYate;
    }

    
    public static function eliminarYate(&$listaYates, $numSerie) {
        foreach ($listaYates as $clave => $yate) {
            if ($yate->Num_Serie === $numSerie) {
                unset($listaYates[$clave]);
                return true;
            }
        }
        return false;
    }

    // Editar información de un yate por número de serie
    public static function editarYate(&$listaYates, $numSerie, $nuevaInformacion) {
        foreach ($listaYates as $clave => $yate) {
            if ($yate->Num_Serie === $numSerie) {
                $listaYates[$clave]->Informacion = $nuevaInformacion;
                return true;
            }
        }
        return false;
    }

  
    public static function obtenerInformacion(&$listaYates, $numSerie) {
        foreach ($listaYates as $yate) {
            if ($yate->Num_Serie === $numSerie) {
                return $yate;
            }
        }
        return null;
    }
}


?>