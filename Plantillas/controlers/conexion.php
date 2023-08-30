<?php
class  conexion extends PDO{
    private $tipo_BD ='mysql';
    private $host = 'localhost';
    private $Nombre_BD = '#';
    private $Usuario = 'root';
    private $Contraseña = '';


public function __construct(){
  try{
    parent::__construct($this->tipo_BD. ':host='. $this->host. ';dbname='. $this->Nombre_BD, $this->Usuario, $this->Contraseña);
  }catch(PDOException $e){
    echo'Ha surgido un error y no se puede conectar con la base de datos detalle: '. $e->getMessage();
    exit;
  }
} 
}

?>