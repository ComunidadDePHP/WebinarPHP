<?php
//Autor: Claudio Morales
//Fecha: 23 mayo 2018
//Video del Webinar:
class vista
{
  public function __construct($metodo="inicio")
    {
      switch ($metodo) 
        {
            case "inicio":
              $this->metodoPantallaInicio();
              break;
            case "nuevoeditor":
              $this->metodoNuevoEditor();
              break;
            case "nuevanoticia":
              $this->metodoNuevaNoticia();
              break;
            case "listarnoticia":
              $this->metodoListarNoticia();
              break;
            case "detallenoticia":
              $this->metodoDetalleNoticia();
              break;
            default:
              $this->sinMetodo();
              break;
        }
    }
  private function sinMetodo()
    {
      echo "Sin acciones";
    }
  private function metodoPantallaInicio()
    {
      echo "<div>Bienvenido al sistema </div>";
    }
  private function metodoDetalleNoticia()
    {
      include('consultas.php');
      $consulta = new ClaseConsultasBase();
      $arreglo = $consulta->detalleNoticia();
      echo "<div>Detalle de Noticias.</div>";
      echo "<div>Titulo: ".$arreglo["titulo"]."</div>";
      echo "<div>Autor: ".$arreglo["email_autor"]."</div>";
      echo "<div>Fecha: ".$arreglo["fechahora"]."</div>";
      $textofiltrado = htmlentities($arreglo["textopublicacion"]);
      echo "<div>Noticia: ".$textofiltrado."</div>";
    }
  private function metodoListarNoticia()
    {
      include('consultas.php');
      $consulta = new ClaseConsultasBase();
      $arreglo = $consulta->listarNoticias();
      
      echo "<div>Listado de Noticias.</div>";
      foreach($arreglo as $valor)
        {
          echo "<div>";
            echo "Titulo Noticia: ".$valor["titulo"]."<br>";
            echo '<a href="index.php?o=detallenoticia&id='.$valor["id"].'">detalle</a>';
            echo '<hr>';
          echo "</div>";
        }
    }
  private function metodoNuevaNoticia()
    {
      //Tarea crear un campo select donde podamos seleccionar los diferentes
      //autores de la base de datos
      echo '
            <form action="guardar.php?o=nuevanoticia" method="POST" >
              Autor: claudio@pronuer.com <br>
            
              Titulo: 
                <input type="text" name="titulonoticia" id="idtitulonoticia" >
                <br>
                
              Noticia:
                <textarea rows="4" cols="50" name="cuerponoticia" id="idcuerponoticia" ></textarea>
                <br>
                
              <input type="submit" value="Guardar Nueva Noticia">
            </form>';
    }
  private function metodoNuevoEditor()
    {
      $texto_mensaje = "";
      $mensaje = (isset($_GET["mensaje"]))?$_GET["mensaje"]:"";
      switch($mensaje)
      {
        case "0":
          $texto_mensaje = "Error de conexión";
          break;
        case "1":
          $texto_mensaje = "Se registro el usuario con exito";
          break;
        case "2":
          $texto_mensaje = "No se pudo guardar el registro";
          break;
      }
    
      echo "<div>$texto_mensaje</div>";
      echo '
            <form action="guardar.php?o=nuevoeditor" method="POST" >
              Correo: 
                <input type="text" name="correoformulario" id="idcorreoformulario" >
                <br>
              Password: 
                <input type="password" name="passformulario" id="idpassformulario" >
                <br>
              Nombre: 
                <input type="text" name="nombreformulario" id="idnombreformulario" >
                <br>
              Apellido Paterno: 
                <input type="text" name="apaternoformulario" id="idapaternoformulario" >
                <br>
              Apellido Materno: 
                <input type="text" name="amaternoformulario" id="idamaternoformulario" >
                <br>
              Nacimiento (YYYY-MM-DD): 
                <input type="text" name="nacioformulario" id="idnacioformulario" >
                <br>  
              <input type="submit" value="Guardar datos de nuevo editor">
            </form>';
    }
}
