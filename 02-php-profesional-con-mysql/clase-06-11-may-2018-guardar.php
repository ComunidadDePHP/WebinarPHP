<?php
//Autor: Claudio Morales
//Fecha: 11 mayo 2018
//Video del Webinar: 
//Tarea Eliminar o quitar las instrucciones de tipo echo

define("SERVER",      "localhost");
define("USUARIO",     "usermay2018");
define("PASS",        "Sistema_1234");
define("NOMBREBASE",  "usermay2018");

class ClaseBaseDatos
  {
      private $objetoBase = '';
      public function __construct()
        {
            $this->objetoBase = new mysqli(SERVER, USUARIO, PASS, NOMBREBASE);
            if($this->objetoBase->connect_errno)
              {
                  echo "Fallo la conexion: ".$objetoMysqli->connect_error;
              }
        }
      public function nuevoEditor()
        {
            //echo "nuevo editor";
            //var_dump($this->objetoBase);
            $correo = $_POST["correoformulario"];
            $pass = $_POST["passformulario"];
              
            $pass = password_hash($pass,PASSWORD_DEFAULT);
        
            $nombre = $_POST["nombreformulario"];
            $apaterno = $_POST["apaternoformulario"];
            $amaterno = $_POST["amaternoformulario"];
            $nacio = $_POST["nacioformulario"];
            $sql = 
            "insert into persona 
            (email, pass, nombre, a_paterno, a_materno, nacio ) 
            values ('$correo','$pass','$nombre','$apaterno','$amaterno','$nacio')";
        
            if($this->objetoBase->query($sql))
            {
              //echo "salio bien";
              header('Location: index.php?o=nuevoeditor');
            }
            else
            {
              echo "Error:".$this->objetoBase->error;
            }
        }
      public function nuevaNoticia()
        {
            $titulo	 = $_POST["titulonoticia"];
            $textopublicacion = $_POST["cuerponoticia"];
            $fecha = date("Y-m-d H:i:s");
            $sql = 
            "insert into publicacion 
            (email_autor, fechahora, titulo, textopublicacion) 
            values ('claudio@pronuer.com','$fecha','$titulo','$textopublicacion')";
        
            if($this->objetoBase->query($sql))
            {
              //echo "salio bien";
              header('Location: index.php?o=nuevanoticia');
            }
            else
            {
              echo "Error:".$this->objetoBase->error;
            }
        }
      public function sinMetodo()
        {
            echo "Sin metodo";
        }
      public function __destruct()
        {
            $this->objetoBase = null;
            //var_dump($this->objetoBase);
        }
  }
$operacion = (isset($_GET["o"])) ? $_GET["o"] : "ninguna";
$basedatos = new ClaseBaseDatos();
switch ($operacion) 
  {
    case "nuevoeditor":
      $basedatos->nuevoEditor();
      break;
    case "nuevanoticia":
      $basedatos->nuevaNoticia();
      break;
    default:
      $this->sinMetodo();
      break;
  }



