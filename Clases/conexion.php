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
        if (!$this->conexion) {
            die("Error al conectar a la base de datos: " . mysqli_connect_error());
        }
    }

    public function prepare($query) {
        return $this->conexion->prepare($query);
    }

    public function close() {
        mysqli_close($this->conexion);
    }

    public function query($sql) {
        $query = $this->conexion->query($sql);
        return $query;
    }

    public function getConexion() {
        return $this->conexion;
    }

}

?>
