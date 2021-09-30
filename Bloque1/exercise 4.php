<html>
<head>
   <title>Exercise4</title> 
</head>
<body>
    <?php
        class Palindromic {

            private $frase;
            private $fraseDelReves;

            function __construct($frase) {
                $this->frase = strtolower(str_replace(' ', '', $frase));
                $this->fraseDelReves = strrev($this->frase);
            }

            public function analizatePalindromic() {
                $counter = 0;
                $length = floor(strlen($this->frase)/2);
                for ($i = 0; $i < $length; $i++) {
                    if ($this->frase[$i] == $this->fraseDelReves[$i]) {
                        $counter++;
                    }
                }
                if ($counter == $length) {
                    echo "Is palindromic";
                }
                else {
                    echo "Is not palindromic";
                }
            }
        }

    $frase = "oso";

    $p1 = new Palindromic($frase);
    $p1->analizatePalindromic();

    ?>

</body>
</html>