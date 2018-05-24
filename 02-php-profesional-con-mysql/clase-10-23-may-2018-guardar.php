<?php
include_once("config.php");
class ClaseBaseDatos
  {
      private $objetoBase = '';
      private $objetoPDO = '';
      public function __construct()
        {
            if(TIPOCONEXION=='mysqli')
              {
                $this->objetoBase = new mysqli(SERVER, USUARIO, PASS, NOMBREBASE);
                if($this->objetoBase->connect_errno)
                  {
                      $o = $_GET["o"];
                      header("Location: index.php?o=$o&mensaje=0");
                      exit();
                  }
              }
              else if(TIPOCONEXION=='pdomysql')
              {
                  try
                  {
                    $cadena ="mysql:host=".SERVER.";dbname=".NOMBREBASE;
                    $this->objetoPDO = new PDO($cadena,USUARIO,PASS);
                  }
                  catch (PDOException $e) 
                  {
                    $o = $_GET["o"];
                    header("Location: index.php?o=$o&mensaje=0");
                    exit();
                  }
              }
        }
      public function nuevoEditor()
        {
            $correo = $_POST["correoformulario"];
            $pass = $_POST["passformulario"];    
            $pass = password_hash($pass,PASSWORD_DEFAULT);
        
            $nombre = htmlentities($_POST["nombreformulario"]);
            $apaterno = htmlentities($_POST["apaternoformulario"]);
            $amaterno = htmlentities($_POST["amaternoformulario"]);
            $nacio = $_POST["nacioformulario"];

            if(TIPOCONEXION=='mysqli')
              {
                $sentencia = $this->objetoBase->prepare(
                "insert into persona
                (email, pass, nombre, a_paterno, a_materno, nacio)
                values (?,?,?,?,?,?)");        
                $sentencia->bind_param("ssssss",$correo,$pass,$nombre,$apaterno,$amaterno,$nacio);    
              }
            else if(TIPOCONEXION=='pdomysql')
              {
                $sentencia = $this->objetoPDO->prepare(
                "insert into persona
                (email, pass, nombre, a_paterno, a_materno, nacio)
                values (?,?,?,?,?,?)");
                $sentencia->bindParam(1,$correo, PDO::PARAM_STR);
                $sentencia->bindParam(2,$pass, PDO::PARAM_STR);
                $sentencia->bindParam(3,$nombre, PDO::PARAM_STR);
                $sentencia->bindParam(4,$apaterno, PDO::PARAM_STR);
                $sentencia->bindParam(5,$amaterno, PDO::PARAM_STR);
                $sentencia->bindParam(6,$nacio, PDO::PARAM_STR);
              }
        
            if($sentencia->execute())
              {
                header('Location: index.php?o=nuevoeditor&mensaje=1');
              }
            else
              {
                header('Location: index.php?o=nuevoeditor&mensaje=2');
              }
        }
      public function nuevaNoticia()
        {
            $titulo	 = htmlentities($_POST["titulonoticia"]);
            $textopublicacion = $_POST["cuerponoticia"];
            $textopublicacion = htmlentities($textopublicacion);
            $fecha = date("Y-m-d H:i:s");
            $email_autor = "claudio@pronuer.com";
            if(TIPOCONEXION=='mysqli')
              {
                $sentencia = $this->objetoBase->prepare("insert into publicacion 
                (email_autor, fechahora, titulo, textopublicacion)
                values(?,?,?,?)");
                $sentencia->bind_param("ssss",$email_autor,$fecha,$titulo,$textopublicacion);
                
              }
            else if(TIPOCONEXION=='pdomysql')
              {
                $sentencia = $this->objetoPDO->prepare("insert into publicacion 
                (email_autor, fechahora, titulo, textopublicacion)
                values(?,?,?,?)");
                $sentencia->bindParam(1,$email_autor, PDO::PARAM_STR);
                $sentencia->bindParam(2,$fecha, PDO::PARAM_STR);
                $sentencia->bindParam(3,$titulo, PDO::PARAM_STR);
                $sentencia->bindParam(4,$textopublicacion, PDO::PARAM_STR);
              }
            if($sentencia->execute())
              {
                header('Location: index.php?o=nuevanoticia&mensaje=1');
              }
            else
              {
                header('Location: index.php?o=nuevanoticia&mensaje=2');
              }
        }
      public function sinMetodo()
        {
            header('Location: index.php?o=nuevanoticia&mensaje=0');
        }
      public function __destruct()
        {
            $this->objetoBase = null;
            $this->objetoPDO = null;
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
