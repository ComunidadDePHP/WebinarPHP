<?php
//Autor: Claudio Morales
//Fecha: 2 abril 2018
//Video del Webinar: https://www.facebook.com/ComunidadDePeHPe/videos/1482443465199112/
class html
  {
    public function cabeza($titulo='Sin titulo')
      {
        echo "<!DOCTYPE html><html><head>";
        echo "<title>$titulo</title>";
        //
        // TAREA
        //
        //Que se muestre un alert con javascript
        //
        // TAREA
        //
      
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
$objetohtml = new html();
$objetohtml->cabeza("Pronuer home");
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

//Tarea
//Crear Funcion que modifique la propiedad $NombreObjeto
//Convertir la propiedad "$nombreObjeto" a privada
//Crear 5 diferentes objetos con diferente nombre y mostrar los nombres de cada uno
