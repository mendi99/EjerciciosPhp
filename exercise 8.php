<html>
   <head>
   <title>Prueba de PHP</title>
   <style>
    html, body {height:100%;}
    html {display:table; width:100%;}
    body {display:table-cell; text-align:center; vertical-align:middle;}
    </style>
   </head>
   <body>
      <?php
        $base = 7;
        if($base % 2 == 0){
            $base++;
        }
        crearPiramide($base);


        function crearPiramide($base){
            $star = "*";
            $counterStar = 1;
            for($i = 0; $i < $base; $i = $i + 2){
                echo "<p>";
                for($j = 0; $j < $counterStar; $j++){
                    echo $star;
                }
                echo "</p>";
                $counterStar += 2;
            }
        }
        

      ?>        
   </body>
</html>