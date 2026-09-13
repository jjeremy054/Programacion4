<?php
     $likes = 7000;
     $vistas = 55000;
     echo "==VIDEO DE REDES==<br>";
     $interaccion = ($likes / $vistas)*100;
    if($vistas > 50000 && $interaccion > 10){
        echo "ESTADO: video viral";
    }else{
        echo "ESTADO: video no viral";
    }
?>