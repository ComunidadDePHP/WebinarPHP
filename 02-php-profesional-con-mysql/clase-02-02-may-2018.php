<?php
//Autor: Claudio Morales
//Fecha: 02 mayo 2018
//Video del Webinar: https://www.facebook.com/ComunidadDePeHPe/videos/1519664078143717/

//Cambiar los siguientes valores, por los valores de tu base de datos.
$server = "localhost";
$usuario = "usermay2018";
$pass = "Sistema_1234";
$nombreBase = "usermay2018";
//Los datos anteriores se cambian por los valores de tu base de datos.

var_dump(PDO::getAvailableDrivers());
try
{
  $objetoPDO = new PDO("mysql:host=$server;dbname=$nombreBase",$usuario,$pass);
}
catch(PDOException $zzz)
{
  echo "El error de conexion es: ".$zzz->getMessage();
  exit();
}
echo "Mi sistema";

/*
$objetoMysqli = new mysqli($server, $usuario, $pass, $nombreBase);
//var_dump($objetoMysqli);
if($objetoMysqli->connect_errno)
  {
  echo "fallo la conexion: ".$objetoMysqli->connect_error;
}
*/
/*
//conectado con FUNCION de Mysqli Que ya no ocuparemos
$conexion = mysqli_connect($server, $usuario, $pass, $nombreBase);
if(!$conexion)
  {
    echo "La conexion fallo";
    exit();
  }
else
  {
    echo "La conexion es exitosa <br>".mysqli_get_host_info($conexion);
  }
echo "<br>todo mi sistema";
*/

//Super mega rete contra ultra deprecada es decir nadie de los nadie debe usarlar
//mysql_connect()v
