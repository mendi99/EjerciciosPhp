<html>
   <head>
   <title>Prueba de PHP</title>
   <style>
    table,tr,td{
        border: 1px black solid;
    }
    </style>
   </head>
   <body>
      <?php
        
        class Numbers{
            private $natural = array();
            private $factorial = array();

            function rellenarPrimerArray(){
                for($i = 0; $i < 10; $i++){
                    array_push($this->natural, $i);
                }
            }

            function rellenarSegundoArray(){
                for($i = 0; $i < count($this->natural); $i++){
                    $solucion = $this->natural[$i];
                    for($j = $solucion - 1; $j > 0; $j--){
                        $solucion *= $j;
                    }
                    array_push($this->factorial, $solucion);
                }
            }

            function imprimirSolucion(){
                echo '<table class="default"><tr>';
                echo "<td>Numbers</td>";

                    for($i = 0; $i < count($this->natural); $i++){
                        echo "<td>".$this->natural[$i]."</td>";

                    }

                echo "</tr>";
                echo "<tr>";
                echo "<td>Factorial</td>";
                    for($i = 0; $i < count($this->factorial); $i++){
                        echo "<td>".$this->factorial[$i]."</td>";

                    }
                echo "</tr>";
                echo "</table>";
            }

        }
        $n1 = new Numbers();
        $n1->rellenarPrimerArray();
        $n1->rellenarSegundoArray();
        $n1->imprimirSolucion();


      ?>        
   </body>
</html>