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
        
        class Analizador{
            private $str;
            private $arrayPalabras = array();
            private $arrayBueno = array();

            function __construct($str){
                $this->str = $str;
            }

            function rellenarArray(){
                $this->arrayPalabras = explode($this->str);
            }

            function rellenarBueno(){
                for($i = 0; $i < sizeof($this->arrayPalabras); $i++){
                    array_push($arrayBueno, $arrayPalabras[$i]);
                }
            }
        }
        $t1 = new Table(5,4);
        $t1->imprimirSolucion();
      ?>        
   </body>
</html>