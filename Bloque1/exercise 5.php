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
                    echo "Puedes entrar1";
                }else{
                    echo "No puedes entrar1";
                }
            }else if($this->age > 9 || $this->height > 119){
                echo "Puedes entrar2";
            }else{
                echo "No puedes entrar2";
            }
        }
    }

    $p1 = new Person(5, 0, 1);
    $p1->analizarPersona();

    ?>

</body>
</html>