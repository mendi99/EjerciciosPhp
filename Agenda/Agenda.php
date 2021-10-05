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

            private $information;
            private $informationArray = array();

            function __construct($info){
                if(empty($info)){
                    $this->information = $_POST["nombre"] + $_POST["email"];
                }
            }

            function rellenarArray(){
                $this->informationArray = explode(",", $this->information);
            }

            function imprimirArray(){
                echo $this->information;
                foreach($this->informationArray as $key=>$value){
                    echo "$key / $value";
                }
            }
        }
        
        $agenda = new Agenda($_POST["izkutatuta"]);
        $agenda->rellenarArray();
        $agenda->imprimirArray();

      ?>
   </body>
</html>