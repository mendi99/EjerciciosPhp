<html>
<head>
   <title>Exercise4</title> 
</head>
<body>
    <?php

    class Person{
        private $age;
        private $height;
        private $alone;

        function __construct($age,$height,$alone){
            $this->age = $age;
            $this->height = $height;
            $this->alone = $alone;
        }

        function analizarPersona(){
            if($this->age > 6 && $this->age < 10){
                if($this->alone == 1){
                    echo "Puedes entrar";
                }else{
                    echo "No puedes entrar";
                }
            }
        }
    }

    $p1 = new Person(7, 5, 0);

    ?>

</body>
</html>