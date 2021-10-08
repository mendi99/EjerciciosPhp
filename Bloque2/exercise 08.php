<html>
   <head>
   <title>Prueba de PHP</title>
   <style>
    </style>
   </head>
   <body>
  
      <?php


        function buscarArchivo(){
            try{
                file_exists("config.php");
            }catch (Exception $e){
                echo "No existe";
            }
        }

        buscarArchivo();


      ?>
   </body>
</html>