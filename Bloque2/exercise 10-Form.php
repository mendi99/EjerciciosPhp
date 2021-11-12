<html>
   <head>
   <title>Prueba de PHP</title>
   <style>
    </style>
   </head>
   <body>
  
      <?php

        include("exercise 10.php");
        class User extends Persona{

            private $puntos;

            public function __construct($name, $lastName, $dni, $puntos){
                parent::__construct($name, $lastName, $dni);
                $this->puntos = $puntos;
            }
           
            public function getPuntos(){
                return $this->puntos;
            }

            public function setPuntos($valor){
                $this->puntos = $valor;
            }

            public function fullName(){
                $result = "User: " . Parent::getName(). " " . Parent::getLastName() . " con dni: " . Parent::getDni()." tiene ".$this->puntos." puntos.<br>";
                return $result;
            }

            public function analizarPuntos(){
                if($this->puntos >= 100){
                    echo " Tiene mas de 100 puntos";
                }else{
                    echo " Tiene menos de 100 puntos";
                }
            }
        }

      ?>

        <form action="exercise 10-Form.php" method="POST">
            <p>Nombre: <input type="text" name="nombre"></p>
            <p>Apellido: <input type="text" name="apellido"></p>
            <p>Dni: <input type="text" name="dni"></p>
            <p>Puntos: <input type="text" name="puntos"></p>
            <p><input type="submit" value="Enviar" name="enviar"></p>
        </form>
        <?php
            if(isset($_POST["enviar"])){
                $u = new User($_POST["nombre"], $_POST["apellido"], $_POST["dni"], $_POST["puntos"]);
                echo $u->fullName();
                $u->analizarPuntos();
            }
        ?>
   </body>
</html>