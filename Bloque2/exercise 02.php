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
        
        class Table{
            private $filas;
            private $columnas;

            function __construct($filas,$columnas){
                $this->filas = $filas;
                $this->columnas = $columnas;
            }

            function imprimirSolucion(){
                echo '<table class="default"><tr>';
                    for($i = 0; $i < $this->filas; $i++){
                        echo "<tr>";
                            for($j = 0; $j < $this->columnas; $j++){
                                echo "<td>Mikel</td>";
                            }
                        echo "</tr>";
                    }
                echo "</tr>";
                echo "</table>";
            }
        }
        $t1 = new Table(5,4);
        $t1->imprimirSolucion();
      ?>        
   </body>
</html>