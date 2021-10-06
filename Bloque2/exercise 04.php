<html>
   <head>
   <title>Prueba de PHP</title>
   <style>
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
                $this->arrayPalabras = explode(" ", $this->str);
            }

            function rellenarBueno(){
                for($i = 0; $i < sizeof($this->arrayPalabras); $i++){
                    $this->arrayBueno[$this->arrayPalabras[$i]] = strlen($this->arrayPalabras[$i]);
                }
            }

            function imprimirArray(){
                foreach($this->arrayBueno as $key=>$value){
                    echo "<p>$key $value</p>";
                }
            }
        }
        $t1 = new Analizador("manzana pera limón sandía melón");
        $t1->rellenarArray();
        $t1->rellenarBueno();
        $t1->imprimirArray();
        
      ?>
   </body>
</html>