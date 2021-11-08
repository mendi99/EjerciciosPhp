<html>
   <head>
   <title>Prueba de PHP</title>
   <style>
    </style>
   </head>
   <body>
  
      <?php

        class BuscadorAchivo{

            function __construct($fileName){
                if(!file_exists($fileName)){
                    throw new Exception('The file doesnt exist');
                }
            }

        }
        try{
            $b1 = new BuscadorAchivo("config.php");
            echo "The file does exist";
        }catch (Exception $e){

            echo $e->getMessage();
        }


      ?>
   </body>
</html>