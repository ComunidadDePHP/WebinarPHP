<?php
//Autor: Claudio Morales
//Fecha: 16 abril 2018
//Video del Webinar:

class OperacionesAritmeticas
  {
     public function operaciones($datosR, $operacion="divide")
      {
       if($operacion=="suma")
       {
         $resultado = $datosR[0] + $datosR[1] + $datosR[2]+ $datosR[3];
       }
       else if($operacion=="resta")
       {
         $resultado = $datosR[0] - $datosR[1] - $datosR[2] - $datosR[3];
       }
       else if($operacion=="multiplica")
       {
         $resultado = $datosR[0] * $datosR[1] * $datosR[2] * $datosR[3];
       }
       else if($operacion=="divide")
       {
         $resultado = $datosR[0] / $datosR[1] / $datosR[2] / $datosR[3];
       }
       else
       {
         $resultado = "La Operacion '$operacion' no es reconocida";
       }
        return $resultado;
      }    
  }
$datos = array(1,2,3,4);

$objeto = new  OperacionesAritmeticas();
//$objeto->arreglo();
echo "El valor es: ".$objeto->operaciones($datos,"sumar");  


//Tarea
//Compartir la fanpage y portal de la comunidad http://comunidaddephp.org/

