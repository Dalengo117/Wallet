<?php

$host = "localhost";
$usuario = "root";
$clave = "";
$bd = "datausuarios";

$conexion = mysqli_connect($host,$usuario,$clave,$bd);

if($conexion){
    echo "<script>console.log('Conectado correctamente con la base de datos' );</script>";
}else {
    echo "<script>console.log('No se pudo conectar con la base de datos' );</script>";
}

//Para las graficas
class conexion{
    private $servidor;
    private $usuario;
    private $contrasena;
    private $basedatos;
    public $conexion;
    public function __construct(){
        $this->servidor = "localhost";
        $this->usuario = "root";
        $this->contrasena = "";
        $this->basedatos = "bd_grafico";
    }
    function conectar(){
        $this->conexion = new mysqli($this->servidor,$this->usuario,$this->contrasena,$this->basedatos);
        $this->conexion->set_charset("utf8");
    }
    function cerrar(){
        $this->conexion->close();
    }
}
?>
