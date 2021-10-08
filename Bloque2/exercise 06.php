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
                private $nombres = array(array("Mikel", "Agosto"), array("Ainara", "Enero"), array("Ibai", "Febrero"), array("Haizea", "Marzo"), array("Xabi", "Enero"));

                function rellenarArray(){
                    foreach($this->nombres as $value){
                        switch ($value[1]) {
                            case $this->meses[0]:
                                $this->arrayBueno[$meses[0]] = $value[0];
                                break;
                            case $this->meses[1]:
                                $this->arrayBueno[$meses[1]] = $value[1];
                                break;
                            case $this->meses[2]:
                                $this->arrayBueno[$meses[2]] = $value[2];
                                break;
                            case $this->meses[3]:
                                $this->arrayBueno[$meses[3]] = $value[3];
                                break;
                            case $this->meses[4]:
                                $this->arrayBueno[$meses[4]] = $value[4];
                                break;
                            case $this->meses[5]:
                                $this->arrayBueno[$meses[5]] = $value[5];
                                break;
                            case $this->meses[6]:
                                $this->arrayBueno[$meses[6]] = $value[6];
                                break;
                            case $this->meses[7]:
                                $this->arrayBueno[$meses[7]] = $value[7];
                                break;
                            case $this->meses[8]:
                                $this->arrayBueno[$meses[8]] = $value[8];
                                break;
                            case $this->meses[9]:
                                $this->arrayBueno[$meses[9]] = $value[9];
                                break;
                            case $this->meses[10]:
                                $this->arrayBueno[$meses[10]] = $value[10];
                                break;
                            case $this->meses[11]:
                                $this->arrayBueno[$meses[11]] = $value[11];
                                break;
                            case $this->meses[12]:
                                $this->arrayBueno[$meses[12]] = $value[12];
                                break;
                        }
                    }
                }

                function imprimirArray(){
                    foreach($this->arrayBueno as $key=>$value){
                        echo "$key<ul>";
                        for($i = 0; $i < sizeof($value); $i++){
                            echo "<li>".$value[$i]."</li>";
                        }
                        echo "</ul>";
                    }
                }
            }

            $c1 = new Cumpleaños();
            $c1->rellenarArray();
            $c1->imprimirArray();
      ?>
   </body>
</html>