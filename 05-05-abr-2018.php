<?php
//Autor: Claudio Morales
//Fecha: 5 abril 2018
//Video del Webinar: https://www.facebook.com/ComunidadDePeHPe/videos/1488275151282610/

class ElPadre
  {
      public function metodoDelPadre()
        {
        echo "desde el padre<br>";
      }
  }
class ElHijo extends ElPadre
  {
      public function metodoDelPadre()
        {
          echo "desde el hijo";
        }
      public function otroMetodo()
      {
        parent::metodoDelPadre();
      }
  }
//$objeto = new ElHijo();
//$objeto->otroMetodo();
//------ Metodos estaticos
class OtraClase
{
  public static function metodoSinObjeto()
  {
    echo "Sin objeto";
  }
}
///OtraClase::metodoSinObjeto();

class OperacionesAritmeticas
  {
     public function suma($valorUno, $valorDos)
      {
        $resultado = $valorUno + $valorDos;
        return $resultado;
      }
    public function mostrarvalor()
    {
      echo $resultado;
    }
      
  }

$objetoOperaciones = new OperacionesAritmeticas();
echo "el resultado es:".$objetoOperaciones->suma(5,3);

//Tarea
//Hacer los metodos de operaciones basicas:
//Suma, Resta, División y Multiplicacion
//Los metodos deben recibir hasta 5 elementos para las operaciones
  



