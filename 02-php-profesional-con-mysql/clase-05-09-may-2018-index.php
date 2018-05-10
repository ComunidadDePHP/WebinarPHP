<?php
//Autor: Claudio Morales
//Fecha: 09 mayo 2018
//Video del Webinar: https://www.facebook.com/ComunidadDePeHPe/videos/1527782243998567/
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
  private function metodoNuevoEditor()
    {
      echo '
            <form action="guardar.php?o=nuevoeditor" method="POST" >
              Correo: 
                <input type="text" name="correoformulario" id="idcorreoformulario" >
                <br>
                
              Password: 
                <input type="text" name="passformulario" id="idpassformulario" >
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
            </form>
      ';
    
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Mi Sistema de Publicaciones</title>
  </head>
  <body>
    <header>
      <div style="text-align:center;" >
        Mi sistema de publicación de noticias
      </div>
      <nav style="text-align:center;">
        <a href="index.php?o=inicio"> Inicio </a> 
        | 
        <a href="index.php?o=nuevoeditor"> Nuevo Editor </a>
        | Nueva Noticia | Editar Noticia |
      </nav>
    </header>
    
    <main>
    <?php
      $opcion = (isset($_GET["o"])) ? $_GET["o"] : "inicio";
      $objeto = new vista($opcion);
    ?>
    </main>
  </body>
</html>
