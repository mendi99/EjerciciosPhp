<!DOCTYPE html>
<html>
   <head>
      <title>Formulario</title>
      <meta charset = “UTF-8”>
   </head>
   <body>
   <form action="prueba.php" method="post">
      <p>Nombre: <input type="text" name="nombre"></p>
      <p>Apellido: <input type="text" name="apellido"></p>
      <p><input type="submit" value="Enviar"></p>
   </form>
   <?php
         if (empty ($_POST["nombre"])){
            echo "No has introducido el nombre";
         }
         else {
          // if (isset ($_POST["nombre"]))
          echo "Ha introducido el nombre" .  $_POST["nombre"];
         }
         
      ?> 
   </body>
</html>