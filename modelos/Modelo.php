<?php

require_once('../config.php');

class Modelo{
    protected $db;

    public function __construct()
    {
        $this->db = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME,DB_PORT);
        if($this->db->connect_errno){
            echo "Error de conexion  a la base de datos";
        }else{
            /*echo "Conexion correcta de la base de datos";*/
        }   
    }
}
/*
$x = new Modelo();
*/ 
?>