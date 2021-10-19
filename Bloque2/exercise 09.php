<html>
   <head>
   <title>Prueba de PHP</title>
   <style>
    </style>
   </head>
   <body>
  
      <?php

        class Square{

            private $side;

            function __construct($value){
                if($value <= 0){
                    throw new Exception();
                }else{
                    $this->side = $value; 
                }
            }

            function getArea(){
                return pow($this->side, 2);
            }

        }

        for($i = 0; $i < 5; $i++){
            try{
                $s = new Square(rand(-5, 20));
                echo $s->getArea()."<br>";
            }catch (Exception $e){
                echo "El numero es negativo o 0<br>";
            }
        }


      ?>
   </body>
</html>