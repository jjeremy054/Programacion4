<?php
    $mmr1 = 3050;
    $mmr2 = 3000;
    echo "==SISTEMA DE ENTRADA A PARTIDA==<br>";
    $diferencia = abs($mmr1-$mmr2);
    if($diferencia<=200){
        echo "EMPAREJAMIENTO ACEPTADO,RANGO DE DIFERENCIA ".$diferencia." PTS";
    }else{
        echo "EMPAREJAMIENTO RECHAZADO,RANGO DE DIFERENCIA ".$diferencia." PTS";
    }
?>