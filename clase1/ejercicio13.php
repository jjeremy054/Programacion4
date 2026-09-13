<?php
    $dia = 7;
    echo "recompensaaa<br>";
    if($dia>=7){
        echo "precio mayor<br>";
    }else if($dia==6){
        echo "premio de plata<br>";
    }else if($dia==5){
        echo "premio de bronce<br>";
    }else if($dia<=4 && $dia>=0){
        echo "premio normal";
    }else{
        echo "no hay premio";
    }
?>