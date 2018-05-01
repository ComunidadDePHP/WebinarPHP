<?php
//Autor: Claudio Morales
//Fecha: 30 abril 2018
//Video del Webinar: https://www.facebook.com/ComunidadDePeHPe/videos/1516776408432484/

$server = "localhost";
$usuario = "root";
$pass = "";
$nombreBase = "nuevabase";

//La siguiente forma de conectar no la usaremos
//$conexion = mysqli_connect();
//La anterior forma de conectar no la usaremos

$conexion = new mysqli($server,$usuario,$pass, $nombreBase);
echo "tipo variable: ".gettype($conexion)."<br>";
echo "contenido variable<br>";
var_dump($conexion);
echo "<br><br>";
