<html>
   <head>
   <title>Prueba de PHP</title>
   <style>
    </style>
   </head>
   <body>
      <?php

      class Tienda{

         private $total_compra;
         private $tipo_compra;

         function __construct($total_compra, $tipo_compra){
            $this->total_compra = $total_compra;
            $this->tipo_compra = $tipo_compra;
         }

         
         function analizarCompra(){
            if($this->total_compra < 19){
               if($this->tipo_compra == 'ropa'){
                  echo "Los gastos de envío son 9 euros";
               }else if($this->tipo_compra == 'mascotas'){
                  echo "No se puede realizar el envío";
               }
            }else if($this->total_compra < 40){
               echo "Los gastos de envío son 9 euros";
            }else if($this->total_compra >= 40){
               echo "Los portes de envío son gratis";
            }
         }
      
      }

      $t1 = new Tienda(50, 'ropa');
      $t1->analizarCompra();
      ?>        
   </body>
</html>