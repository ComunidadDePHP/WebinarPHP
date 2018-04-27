<?php
//Autor: Claudio Morales
//Fecha: 4 abril 2018
//Video del Webinar: https://www.facebook.com/ComunidadDePeHPe/videos/1488274731282652/

class SerVivo
  {
      public function respirar()
        {
            echo "<br>Estoy respirando";
            $this->MiMetodo();
        }
      private function MiMetodo()
        {
            echo "<br>Solo desde la clase";
        }
      protected function MetodoCompartido()
        {
            echo "<br>Es un metodo compartido";
        }
  }
class SerHumano extends SerVivo
  {
      public function razonar()
        {
          echo "<br>Yo estoy razonando";
          $this->MetodoCompartido();
        }
  }
//$objetoSerVivo = new SerVivo();
//$objetoSerVivo->respirar();
//$objetoSerVivo->MetodoCompartido();


//echo "<br>";
$objetoSerHumano = new SerHumano();
$objetoSerHumano->razonar();
//$objetoSerHumano->respirar();
//$objetoSerHumano->MetodoCompartido();

//crear 5 metodos publicos padre
//crear 5 metodos protegidos en el padre
//crear 5 metodos privados en el padre
//Explicar con comentarios por que consideran que son de cierto alcance





