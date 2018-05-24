<?php
class ClaseConsultasBase
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
      public function listarNoticias()
        {
            if(TIPOCONEXION=='mysqli')
              {
                $query = "SELECT * FROM publicacion";
                $b='';
                if($mistados = $this->objetoBase->query($query)) 
                  {
                      while ($a = $mistados->fetch_assoc()) 
                      {
                         $b[] = $a;
                      }
                  }
                return $b;
              }
            else if(TIPOCONEXION=='pdomysql')
              {
                  $query = "SELECT * FROM publicacion";
                  $b='';
                  if($mistados = $this->objetoPDO->query($query)) 
                    {
                        while ($a = $mistados->fetchObject()) 
                        {
                           $b[] = get_object_vars($a);
                        }
                    }
                  return $b;
              }    
        }
      public function detalleNoticia()
        {
          if(TIPOCONEXION=='mysqli')
              {
                $id = $_GET["id"];
                $id = intval($id);
                $query = 
                "SELECT email_autor, fechahora, titulo, textopublicacion
                FROM publicacion where id = $id ";
                $a = '';
                if($result = $this->objetoBase->query($query)) 
                    {
                       $a = $result->fetch_assoc();
                    }
                return $a;
              }
          else if(TIPOCONEXION=='pdomysql')
              {
                $id = $_GET["id"];
                $id = intval($id);
                $query = 
                "SELECT email_autor, fechahora, titulo, textopublicacion
                FROM publicacion where id = $id ";
                $a = '';
                if($result = $this->objetoPDO->query($query)) 
                    {
                       $a = get_object_vars($result->fetchObject());
                    }
                return $a;            
              }  

        }
  }
