<html>
   <head>
   <title>Prueba de PHP</title>
   </head>
   <body>
      <?php
         $edad = 12;
         if($edad > 99){
            echo "El rango es 100 y infinito";
         }else if($edad < 10){
            echo "El rango es 0 y 9";
         }else{
             $minNum = intval(substr($edad,0,1)*10);
             $maxNum = $minNum + 9;
             echo "El rango es $minNum y $maxNum";
         }
      ?>        
   </body>
</html>