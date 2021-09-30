<html>
   <head>
   <title>Prueba de PHP</title>
   <style>
    </style>
   </head>
   <body>
      <?php

      $ventas = 55000;
      analizarVentas($ventas);


      function analizarVentas($cantidad){
        if($cantidad < 10000){
            echo "La comision es del 5%";
        }else if($cantidad < 20000){
            echo "La comision es del 8%";
        }else if($cantidad < 40000){
            echo "La comision es del 8%";
        }else if($cantidad > 40000){
            echo "La comision es del 13%";
        }
      }

      ?>        
   </body>
</html>