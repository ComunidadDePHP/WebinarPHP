<?php
//Autor: Claudio Morales
//Fecha: 9 abril 2018
//Video del Webinar:

class OperacionesAritmeticas
  {
     public function arreglo()
      {
       $arreglo = array("Valor 1","Valor 2", "valor 3"," Valor 4");
       //echo $arreglo[4];
       $arreglo2 = array(1=>"pos 1",2=>"pos 2", 0=>"pos x");
       //echo $arreglo2[0];
       $arreglo3[0]="Pos cero";
       $arreglo3[4]="Pos cuatro";
       //echo $arreglo3[1];
       
       $arreglo4 = array("pos1"=>"Claudio", "pos2"=>"Mario", "pos3"=>"Maria");
       echo $arreglo4["pos3"];

     }
     public function suma($datosR)
      {
        $resultado = $datosR[0] + $datosR[1] + $datosR[2]+ $datosR[3];
        return $resultado;
      }
       public function resta($datosR)
      {
        $resultado = $datosR[0] - $datosR[1] - $datosR[2] - $datosR[3];
        return $resultado;
      }
       public function multi($datosR)
      {
        $resultado = $datosR[0] * $datosR[1] * $datosR[2] * $datosR[3];
        return $resultado;
      }
        public function divide($datosR)
      {
        $resultado = $datosR[0] / $datosR[1] / $datosR[2] / $datosR[3];
        return $resultado;
      }      
  }
$datos = array(2,2,2,2);

$objeto = new  OperacionesAritmeticas();
//$objeto->arreglo();
echo "El valor es: ".$objeto->multi($datos);  


//Tarea
//mandar el arreglo llamado $datos a los metodos de resta, multi y divide
//como se hace en el metodo suma




