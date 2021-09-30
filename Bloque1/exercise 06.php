<html>
   <head>
   <title>Prueba de PHP</title>
   </head>
   <body>
      <?php
        $potencia = 3;
        $cantidad = 100;

        for($i = 1; $i <= $cantidad; $i++){
            echo "<a>$i-".pow($i,$potencia)."</a><br>";
        }

      ?>        
   </body>
</html>