<html>
   <head>
   <title>Prueba de PHP</title>
   <style>
    </style>
   </head>
   <body>
  
      <?php
            if(!empty($_POST["mes"])){
                $mes = $_POST["mes"];
                $name = $_POST["name"];
            }

      ?>
            <form action="exercise 06.php" method="post">
            <select name="mes" method="post">
                <option value="Enero">Enero</option>
                <option value="Febrero" selected>Febrero</option>
                <option value="Marzo">Marzo</option>
                <option value="Abril">Abril</option>
                <option value="Mayo" selected>Mayo</option>
                <option value="Junio">Junio</option>
                <option value="Julio">Julio</option>
                <option value="Agosto" selected>Agosto</option>
                <option value="Septiembre">Septiembre</option>
                <option value="Octubre">Octubre</option>
                <option value="Noviembre" selected>Noviembre</option>
                <option value="Diciembre">Diciembre</option>
            </select>
            <p>Name: <input type="text" name="name"></p>
            <input type="hidden" value="<?php
                echo "$mes $name";
            
            ?>" name="izkutatuta">
            <p><input type="submit" value="Enviar"></p>
        </form>
   </body>
</html>