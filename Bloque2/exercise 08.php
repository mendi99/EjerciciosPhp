<html>
   <head>
   <title>Prueba de PHP</title>
   <style>
    </style>
   </head>
   <body>
  
      <?php

        class BuscadorArchivo{

            function __construct($fileName){
                if(!file_exists($fileName)){
                    throw new Exception("The file doesn't exists");
                }else{
                    echo "The file exists";
                }
            }

        }

        $b1 = new BuscadorAchivo("config.php");


      ?>
   </body>
</html>