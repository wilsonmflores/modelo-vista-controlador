<?php
class conexion{
    public static function conexion(){
        $conn =new mysqli ("localhost","soporte","wilson123","mvc")or
        die("Error de la conexion a la BBDD");

        $conn->query("SET NAME'utf8'");
        return $conn;

    }
}

?>