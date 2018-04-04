<?php
//Autor: Claudio Morales
//Fecha: 4 abril 2018
//Video del Webinar: 

class html
  {
    public function cabeza($titulo='Sin titulo', $javascript='')
      {
        echo "<!DOCTYPE html><html><head>";
        echo "<title>$titulo</title>";
        echo $javascript; 
         //Todo el contenido de html del head
        echo "</head>";
      }
     public function abriCuerpo()
     {
       echo "<body>";
     }
     public function cerrarcuerpo()
     {
       echo "</body>";
     }
     public function pie()
     {
       echo "</html>";
     }
  }
class MiClase
{
  private $nombreObjeto = 'objeto vacio';
  public function __construct()
    {
        //echo "se creo el objeto";    
    }
  public function modificaNombre($nuevoNombre)
  {
    echo "El nombre anterior es: ".$this->nombreObjeto;
    $this->nombreObjeto=$nuevoNombre;
    echo "El nuevo nombre es: ".$this->regresarNombre()."<br />";
    
  }
  public function regresarNombre()
  {
    return $this->nombreObjeto;
  }
}
//Termina mis clases
$js = '<script type="text/javascript">
alert("hola desde js");</script>';
$objetohtml = new html();
$objetohtml->cabeza("Pronuer home", $js);
$objetohtml->abriCuerpo();

$miObjeto1 = new MiClase();
$miObjeto2 = new MiClase();
$miObjeto3 = new MiClase();
$miObjeto4 = new MiClase();
$miObjeto5 = new MiClase();

$miObjeto1->modificaNombre("objeto UNO");
$miObjeto2->modificaNombre("objeto DOS");
$miObjeto3->modificaNombre("objeto TRES");
$miObjeto4->modificaNombre("objeto CUATRO");
$miObjeto5->modificaNombre("objeto CINCO");

$objetohtml->cerrarcuerpo();
$objetohtml->pie();
