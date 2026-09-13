<?php
     echo "===SPOTIFY===<br>";
     $codigovalido= TRUE;
     $plan = 10;
     if($codigovalido==true){
        $plan = 10 - (10*0.20);
        echo "PLAN : ACTIVO<br>";
     }else{
        $plan = 10;
        echo "PLAN : INACTIVO<br>";
     }
    echo "DESCUENTO :".$plan ;

?>