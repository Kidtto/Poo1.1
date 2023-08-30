<?php

 

class conexion{

    private $host;
    private $database ;
    private $username;
    private $password;
    private $conexion;


    function __construct()

    {

        $this->host = "localhost";

        $this->database = "yates";

        $this->username = "root";

        $this->password = "";

    }

 

    public function conect() {

        $this->conexion = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->conexion->connect_error) {

            die("Error de base de datos: ".$this->conexion->connect_error);

        }

    }

 

    public function prepare($query) {

        return $this->conexion->prepare($query);

    }

 

    public function close(){

        $this->conexion->close();

    }

 

    public function query($sql){

        $query = $this->conexion->query($sql);

        return $query;  

    }

}