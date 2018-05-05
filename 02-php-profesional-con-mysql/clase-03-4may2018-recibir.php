<?php
class miSistema
{
  public function __construct()
    {
      echo "Post: ".$_POST["nombreformulario"]."<br>";
      echo "GET: ".$_GET["edad"]."<br>";
    
      echo "Inicia archivo recibir";
    }
  public function segundometodo()
    {
      echo "2 Post: ".$_POST["nombreformulario"]."<br>";
      echo "2 GET: ".$_GET["edad"]."<br>";    
    }
}
$miObejeto= new miSistema();
echo "<br>Miles de lineas de codigo adicional<br>";
$miObejeto->segundometodo();
