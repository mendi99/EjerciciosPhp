<html>
   <head>
   <title>Prueba de PHP</title>
   <style>
    #max{
        color: green;
    }
    #min{
        color: blue;
    }
    </style>
   </head>
   <body>
      <?php
        
        class RandomNumbers{
            private $randomNumbers = array();
            private $avg;
            private $sum;

            function rellenarRandom(){
                for($i = 0; $i < 20; $i++){
                    array_push($this->randomNumbers,rand());
                }
            }

            function ordenarArray(){
                asort($this->randomNumbers);
            }

            function maxValue(){
                echo '<p id="max">'.max($this->randomNumbers)."</p>";
            }

            function minValue(){
                echo '<p id="min">'.min($this->randomNumbers)."</p>";
            }

            function calculateAvg(){
                $this->avg = array_sum($this->randomNumbers)/count($this->randomNumbers);
                echo '<p>'.$this->avg."</p>";
            }

            function calculateSum(){
                $this->sum = array_sum($this->randomNumbers);
                echo '<p>'.$this->sum."</p>";
            }

            function imprimirArray(){
                for($i = 0; $i < sizeof($this->randomNumbers); $i++){
                    echo $this->randomNumbers[$i]."<br>";
                }
            }
        }
        $r1 = new RandomNumbers();

        $r1->rellenarRandom();
        $r1->ordenarArray();
        $r1->imprimirArray();
        $r1->minValue();
        $r1->maxValue();
        $r1->calculateAvg();
        $r1->calculateSum();
      ?>        
   </body>
</html>