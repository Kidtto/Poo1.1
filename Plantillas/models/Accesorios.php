<?php

class Accesorios {
    private $Nombre;
    public $Precio;
    public $Descripcion;
    private $ID;

    public function __construct($Nombre, $Precio, $Descripcion, $ID) {
        $this->Nombre = $Nombre;
        $this->Precio = $Precio;
        $this->Descripcion = $Descripcion;
        $this->ID = $ID;
    }

    
    public static function agregarAccesorio(&$listaAccesorios, $nuevoAccesorio) {
        $listaAccesorios[] = $nuevoAccesorio;
    }

    
    public static function eliminarAccesorio(&$listaAccesorios, $ID) {
        foreach ($listaAccesorios as $clave => $accesorio) {
            if ($accesorio->ID === $ID) {
                unset($listaAccesorios[$clave]);
                return true;
            }
        }
        return false;
    }

    
    public static function editarAccesorio(&$listaAccesorios, $ID, $nuevaDescripcion) {
        foreach ($listaAccesorios as $clave => $accesorio) {
            if ($accesorio->ID === $ID) {
                $listaAccesorios[$clave]->Descripcion = $nuevaDescripcion;
                return true;
            }
        }
        return false;
    }

    
    public static function obtenerInformacion(&$listaAccesorios, $ID) {
        foreach ($listaAccesorios as $accesorio) {
            if ($accesorio->ID === $ID) {
                return $accesorio;
            }
        }
        return null;
    }
}

?>