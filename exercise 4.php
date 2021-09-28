<html>
   <head>
   <title>Prueba de PHP</title>
   </head>
   <body>
      <?php
         $fraseUno = "oso";
         analizarFrase($fraseUno);


         function analizarFrase($frase){
            $fraseBien = array();
            $fraseDelReves = array();
            for($i = 0; $i < $frase->sizeof(); $i++){
                $letra = $frase.substr($i, $i+1);
                if(($letra == " ")){
                    array_push($fraseBien,$letra);
                }
            }
            $contador = $fraseBien->sizeof - 1;
            for($j = 0; $j < $fraseBien->sizeof; $j++){
               $fraseDelReves[$j] = $fraseBien[$contador];
               $contador--;
            }
            for($k = 0; $k < $fraseBien->sizeof; $k++){
                if(!($fraseBien[$k] == $fraseDelReves[$k])){
                    return false;
                }
            }
            return true;
         }
      ?>        
   </body>
</html>