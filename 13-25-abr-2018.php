<?php
//Autor: Claudio Morales
//Fecha: 25 abril 2018
//Video del Webinar:

class OperacionesAritmeticas
  {
     public $nombreObjeto="";
    /*
     public function __construct($valor)
      {
       $this->nombreObjeto=$valor;
       echo "El objeto $valor se creo <br>"; 
      }
     function __destruct()
     {
       echo "Adios Objeto: ".$this->nombreObjeto."<br>";
     }
    */
     public function __call($nombreMetodo,$argumentos)
      {
       echo "valor: ".$argumentos[3];
       //echo "Estas llamando el metodo $nombreMetodo";
       if($nombreMetodo=="suma")
        {
         $resultado = 1+1;
         echo "el resultado de la suma es: $resultado";
        }
        else if ($nombreMetodo=="resta")
                 {
         $resultado = 5-1;
         echo "el resultado de la resta es: $resultado";
        }
          
      }
     public function __get($nombrePropiedad)
     {
       echo "tu estas intentando extrer el valor 
       de la propiedad $nombrePropiedad deebes usar el metodo llamado 'obteneredad' <br>";
     }
     public function __set($nombre, $valor)
     {
       echo "nombre $nombre y valor $valor";
     }
     public function operaciones()
      {}    
  }

$objeto1 = new OperacionesAritmeticas("1");

//$objeto2 = new OperacionesAritmeticas("2");
//$objeto2=null;
//echo "Mucho codigo antes<br>";
//$objeto1->resta(3,5,6,4);
//echo "la edad es: ".$objeto1->edad;
$objeto1->edad=4;
