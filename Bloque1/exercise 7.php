<html>
   <head>
   <title>Prueba de PHP</title>
   </head>
   <body>
      <?php
        $number = 99;
        echo $number . "<br>";
        while($number != 1){
            if($number % 2 == 0){
                $number = $number / 2;
                echo $number . "<br>";
            }else{
                $number = $number * 3;
                $number = $number + 1;
                echo $number . "<br>";
            }
        }

      ?>        
   </body>
</html>