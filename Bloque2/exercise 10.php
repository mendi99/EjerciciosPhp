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

            public function __construct($name, $lastName, $dni){
                $this->name = $name;
                $this->lastName = $lastName;
                $this->dni = $dni;
            }
           
            public function getName(){
                return $this->name;
            }

            public function setName($name){
                $this->name = $name;
            }

            public function getLastName(){
                return $this->lastName;
            }

            public function setLastName($lastName){
                $this->lastName = $lastName;
            }

            public function getDni(){
                return $this->dni;
            }

            public function setDni($dni){
                $this->dni = $dni;
            }

            public function fullName(){
                return "Persona: " . $this->getName() . " " . $this->getLastName();
            }
        }


      ?>
   </body>
</html>