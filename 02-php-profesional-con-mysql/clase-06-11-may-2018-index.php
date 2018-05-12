<?php
include ('vista.php')
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
        |
        <a href="index.php?o=nuevanoticia">
        Nueva Noticia
        </a>
        |
        <a href="index.php?o=listarnoticia">
        Editar Noticia 
        </a>
        |
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
