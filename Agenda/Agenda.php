<html>
   <head>
   <title>Prueba de PHP</title>
   </head>
   <body>
      <?php
        
        class Agenda{

            private $informationArray = array();

            function __construct($info){
                if(empty($info)){
                    $this->informationArray[$_POST["nombre"]] = $_POST["email"];
                    
                }else{
                    $this->informationArray[$_POST["nombre"]] = $_POST["email"];
                }
            }

            function imprimirArray(){
                print_r($this->informationArray);
                /*
                foreach($this->informationArray as $key=>$value){
                    echo "$key / $value";
                }
                */
            }

            function getInformation(){
                print_r($this->informationArray);
            }

            
        }
        if(!empty($_POST["nombre"])){
            $agenda = new Agenda($_POST["izkutatuta"]);
            guardarInfo();
        }

      ?>
        <form action="Agenda.php" method="post">
            <p>Nombre: <input type="text" name="nombre"></p>
            <p>Email: <input type="email" name="email"></p>
            <input type="hidden" value="<?php
                function guardarInfo(){
                    $agenda->getInformation();
                }
            
            ?>" name="izkutatuta">
            <p><input type="submit" value="Enviar"></p>
        </form>
   </body>
</html>