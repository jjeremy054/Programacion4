<?php
   $moneda;
   $consecutivo=0;
   do{
     $moneda = rand(1,2);
     if($moneda == 1){
        echo "CARA<br>";
        $consecutivo++;
     }else{
        echo "CRUZ<br>";
        $consecutivo=0;
     }
   }while($consecutivo<5);

?>