<?php
//Autor: Claudio Morales
//Fecha: 23 abril 2018
//Video del Webinar:

class OperacionesAritmeticas
  {
     public function demo()
     {
       $inicio = 1;
       do
           {
                echo "hola ciclo $inicio <br>";
                $inicio++;
           }while($inicio > 1);
     }
  
     public function operaciones($datosR, $operacion="divide")
      {
       $numElemtos = count($datosR);
       //echo " Can elementos: $numElemtos";
       $resultado=0;
       switch($operacion)
       {
         case "suma":
           foreach($datosR as $variableindice => $variablevalor )
            {
             echo "valor Indice= $variableindice Valor Resultado $resultado Valor del arreglo ".$variablevalor." <br>";
             $resultado += $variablevalor;
            }
           break;
         case "resta":
            for($a=0; $a < $numElemtos; $a++)
            {
             $resultado -= $datosR[$a];
            }
           break;
         case "multiplica":
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
//echo "For: Valor es: ".$objeto->operaciones($datos,"suma");  
//echo "Valor es: ".$objeto->estructura();
$objeto->demo();


/*
Tarea
Terminar de implementar el foreach en las 4 operaciones 
de la clase OperacionesAritmeticas
*/
