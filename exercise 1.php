<html>
   <head>
   <title>Prueba de PHP</title>
   </head>
   <body>
      <?php
         $num1 = 12;
         $num2 = 5;
         $arrayAlfabeto = alfabeto();

         for($i = 1; $i <= $num1; $i++){
            for($j = 0; $j < $num2; $j++){
               echo "piso $i letra ".$arrayAlfabeto[$j]."\t";
            }
            echo "<br>";
         }

         function alfabeto(){
            return array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","Ñ","O","P","Q","R","S","T","U","V","W","X","Y","Z");
         }
         
      ?>        
   </body>
</html>