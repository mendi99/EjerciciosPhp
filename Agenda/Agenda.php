<html>
   <head>
   <title>Prueba de PHP</title>
   </head>
   <body>
   <form action="Agenda.php" method="post">
        <p>Nombre: <input type="text" name="nombre"></p>
        <p>Email: <input type="email" name="email"></p>
        <input type="hidden" value="" name="izkutatuta">
        <p><input type="submit" value="Enviar"></p>
    </form>
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

            function guardarInfo(){
                
            }
        }
        
        $agenda = new Agenda($_POST["izkutatuta"]);
        $agenda->imprimirArray();

      ?>
   </body>
</html>