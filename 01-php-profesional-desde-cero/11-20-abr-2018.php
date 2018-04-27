<?php
//Autor: Claudio Morales
//Fecha: 20 abril 2018
//Video del Webinar:

class OperacionesAritmeticas
  {
     public function estructura()
     {
       $valoruno = "Bol";
       $valordos = "Arg";
       $edad = 18;
       $resultado = ($edad>=18) ? "SI entra" : "No entra";
       return $resultado;
     }
     public function operaciones($datosR, $operacion="divide")
      {
       $numElemtos = count($datosR);
       //echo " Can elementos: $numElemtos";
       $resultado=0;
       switch($operacion)
       {
         case "suma":
           //$resultado = $datosR[0] + $datosR[1] + $datosR[2]+ $datosR[3]+$datosR[4];
           for($a=0; $a < $numElemtos; $a++)
            {
             echo "valor A= $a Valor Resultado $resultado Valor del arreglo ".$datosR[$a]." <br>";
             $resultado += $datosR[$a];
            }
           break;
         case "resta":
           //$resultado = $datosR[0] - $datosR[1] - $datosR[2] - $datosR[3];
            for($a=0; $a < $numElemtos; $a++)
            {
             $resultado -= $datosR[$a];
            }
           break;
         case "multiplica":
            //$resultado = $datosR[0] * $datosR[1] * $datosR[2] * $datosR[3];
            $resultado = $datosR[0];
            for($a=0; $a < $numElemtos; $a++)
            {
              $resultado = $resultado * $datosR[$a];
            }
            break;
         case "divide":
           $resultado = $datosR[0] / $datosR[1] / $datosR[2] / $datosR[3];
           break;
       }
        return $resultado;
      }    
  }
$datos = array(1,2,3,4,5);
$objeto = new  OperacionesAritmeticas();
//$objeto->arreglo();
echo "For: Valor es: ".$objeto->operaciones($datos,"suma");  
//echo "Valor es: ".$objeto->estructura();


/*
Tarea
Hacer mas operaciones que las basicas 
*/
