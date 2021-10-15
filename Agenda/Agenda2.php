<html>
   <head>
   <title>Prueba de PHP</title>
   </head>
   <body>
      <?php
        
        class Agenda{

            private $informationArray = array();
            private $arrayMalo = array();

            function __construct($info){
                if(empty($info)){
                    $this->informationArray[$_POST["nombre"]] = $_POST["email"];
                    
                }else{
                    $this->rellenarArray($info);
                }
            }

            function rellenarArray($text){
                $this->arrayMalo = explode(",", $text);
                print_r($this->informationArray);
                for($i = 0; $i < sizeof($this->arrayMalo);$i++){
                    $this->informationArray[$this->arrayMalo[$i]] = $this->arrayMalo[++$i];
                }
            }

            function getInformation(){
                foreach($this->informationArray as $key=>$value){
                    echo "$key,$value";
                }
            }

            
        }
        if(!empty($_POST["nombre"])){
            $agenda = new Agenda($_POST["izkutatuta"]);
        }

      ?>
        <form action="Agenda2.php" method="post">
            <p>Nombre: <input type="text" name="nombre"></p>
            <p>Email: <input type="email" name="email"></p>
            <input type="hidden" value="<?php

            if(!empty($_POST["nombre"])){
                $agenda->getInformation();
            }
            
            ?>" name="izkutatuta">
            <p><input type="submit" value="Enviar"></p>
            <?php
            if(!empty($_POST["nombre"])){
                $agenda->getInformation();
            }
            
            ?>
        </form>
   </body>
</html>