<html>
   <head>
   <title>Prueba de PHP</title>
   <style>
    </style>
   </head>
   <body>
  
      <?php

        class Persona{

            private $name;
            private $lastName;
            private $dni;

            function __construct($name, $lastName, $dni){
                $this->name = $name;
                $this->lastName = $lastName;
                $this->dni = $dni;
            }
           
            function getName(){
                return $this->name;
            }

            function getLastName(){
                return $this->lastName;
            }


            function getDni(){
                return $this->dni;
            }

            function fullName(){
                return "Persona: " . $this->getName() . " " . $this->getLastName();
            }
        }


      ?>
   </body>
</html>