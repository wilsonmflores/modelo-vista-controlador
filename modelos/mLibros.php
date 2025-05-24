<?php
class mlibros{
    private $datosBD;
    private $libros;

    function __construct(){
        $this->datosDB = conexion::conexion();
        $this->libros = array();

    }

    public function getLibros(){
        $consulta = $this->datosDB->query("SELECT*FROM libros");


    // creamos la matriz de datos
    
    while ($filas =$consulta-> fetch_assoc()){
        $this->libros[]=$filas;
    }
        return $this->libros
    }
}

?>