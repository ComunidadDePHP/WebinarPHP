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
     public function suma($uno, $dos, $tres, $cuatro, $cinco)
      {
        $resultado = $uno + $dos+ $tres +$cuatro+$cinco;
        return $resultado;
      }
       public function resta($uno, $dos, $tres, $cuatro, $cinco)
      {
        $resultado = $uno - $dos - $tres - $cuatro - $cinco;
        return $resultado;
      }
       public function multi($uno, $dos, $tres, $cuatro, $cinco)
      {
        $resultado = $uno * $dos * $tres * $cuatro * $cinco;
        return $resultado;
      }
        public function divide($uno, $dos, $tres, $cuatro, $cinco)
      {
        $resultado = $uno / $dos / $tres / $cuatro / $cinco;
        return $resultado;
      }
    public function mostrarvalor()
    {
      echo $resultado;
    }
      
  }

$objetoOperaciones = new OperacionesAritmeticas();
echo "<br>1 el resultado es:".$objetoOperaciones->suma(2,2,2,2,2);
echo "<br>2 el resultado es:".$objetoOperaciones->resta(2,2,2,2,2);
echo "<br>3 el resultado es:".$objetoOperaciones->multi(2,2,2,2,2);
echo "<br>4 el resultado es:".$objetoOperaciones->suma(2,2,2,2,2);

//Tarea
//Hacer los metodos de operaciones basicas:
//Suma, Resta, División y Multiplicacion
//Los metodos deben recibir hasta 5 elementos para las operaciones
  



