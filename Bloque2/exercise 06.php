<html>
   <head>
   <title>Prueba de PHP</title>
   <style>
    </style>
   </head>
   <body>
  
      <?php

            class Cumpleaños{
                private $arrayBueno = array();
                private $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
                private $nombres = array(array("Mikel", "Agosto"), array("Ainara", "Enero"), array("Ibai", "Diciembre"), array("Haizea", "Junio"), array("Xabi", "Enero"));



                function rellenarArray($name, $month){
                    if(array_key_exists($month, $this->arrayBueno)){
                        $value = $this->arrayBueno[$month];
                        array_push($value, $name);
                        $this->arrayBueno[$month] = $value;
                    }else{
                        $this->arrayBueno[$month] = array($name);
                    }
                }

                function imprimirArray(){
                    for($i = 0; $i < sizeof($this->meses); $i++){
                        if(array_key_exists($this->meses[$i], $this->arrayBueno)){
                            $value = $this->arrayBueno[$this->meses[$i]];
                            $mes = $this->meses[$i];
                            echo "<ul><li>$mes<ul>";
                            for($j = 0; $j < sizeof($value); $j++){
                                echo "<li>".$value[$j]."</li>";
                            }
                            echo "</ul></li></ul>";
                            
                        }
                    }
                }

                function llamarRellenar(){
                    foreach($this->nombres as $valor){
                        $this->rellenarArray($valor[0], $valor[1]);
                    }
                }
            }

            $c1 = new Cumpleaños();
            $c1->llamarRellenar();
            $c1->imprimirArray();
      ?>
   </body>
</html>