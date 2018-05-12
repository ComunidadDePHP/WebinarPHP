<?php
//Autor: Claudio Morales
//Fecha: 11 mayo 2018
//Video del Webinar: 

define("SERVER",      "localhost");
define("USUARIO",     "usermay2018");
define("PASS",        "Sistema_1234");
define("NOMBREBASE",  "usermay2018");

class ClaseConsultasBase
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
      public function listarNoticias()
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
      public function detalleNoticia()
        {
          $id = $_GET["id"];
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
  }
