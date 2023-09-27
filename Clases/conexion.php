<?php

class Conexion {

    private $host;
    private $database;
    private $username;
    private $password;
    public $conexion;

    public function __construct() {
        $this->host = "localhost";
        $this->database = "yates";
        $this->username = "root";
        $this->password = "";
        $this->conexion = mysqli_connect("localhost", "root", "", "yates");
    }

    public function conect() {
        $this->conexion = new mysqli($this->host, $this->username, $this->password, $this->database);
        if ($this->conexion->connect_error) {
            die("Error de base de datos: ".$this->conexion->connect_error);
        }
    }

    public function close(){
        $this->conexion->close();
    }

    public function query($sql){ 
        $query = $this->conexion->query($sql);
        return $query;
    }

}

?>
