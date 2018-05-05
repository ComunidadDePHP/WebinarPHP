<?php
//Autor: Claudio Morales
//Fecha: 04 mayo 2018
//Video del Webinar: https://www.facebook.com/ComunidadDePeHPe/videos/1522079894568802/
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Formulario para enviar datos a PHP</title>
  </head>
  <body>
    <div>
      Esto es una pagina para formulario de html con PHP
    </div>
    <form action="recibir.php?edad=23" method="POST" >
      Nombre: <input type="text" name="nombreformulario" id="idnombreformulario" >
      <br>
      <input type="submit" value="Enviar">
    </form>
  </body>
</html>
