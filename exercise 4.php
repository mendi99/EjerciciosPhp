<html>
   <head>
   <title>Prueba de PHP</title>
   </head>
   <body>
      <?php
         $fraseUno = "Mierda";
         if(analizarFrase($fraseUno)){
            echo "Es palindromo";
         }else{
            echo "No es palindromo";
         }


         function analizarFrase($frase){
            $fraseBien = array();
            $fraseDelReves = array();
            for($i = 0; $i < strlen($frase); $i++){
                $letra = $frase.substr($i, $i+1);
                if(($letra != " ")){
                    array_push($fraseBien,$letra);
                }
            }
            $contador = sizeof($fraseBien) - 1;
            for($j = 0; $j < sizeof($fraseBien); $j++){
               array_push($fraseDelReves,$fraseBien[$contador]);
               $contador--;
            }
            for($k = 0; $k < sizeof($fraseBien); $k++){
                if(!($fraseBien[$k] == $fraseDelReves[$k])){
                    return false;
                }
            }
            return true;
         }
      ?>        
   </body>
</html>