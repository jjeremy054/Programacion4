<?php 
     $tv = 10;
     $phone = 5;
     $unidadtv = 2;
     $unidadphone = 1;
     echo "==OPTIMIZACION DE ANCHO DE BANDA==<br>" ;
     if((($tv*$unidadtv)+($phone*$unidadphone))<=25){
        echo "SOPORTA 4K";
     }else{
        echo "NO SOPORTA 4K";
     }
?>