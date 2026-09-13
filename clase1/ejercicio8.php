<?php  
    $TwitchHoras = 80;
    $YoutubeHoras = 70;
    $TwichA = 12000;
    $YoutubeA = 14000;
    echo "==HORAS Y AUDIENCIA DE TWITCH Y YOUTUBE==<br>";
    if($TwitchHoras > $YoutubeHoras){
        echo "MAYOR HORAS TRANSMITIDAS : TWITCH<br>";
    }else{
        echo "MAYOR HORAS TRANSMITIDAS : YOUTUBE<br>";
    }
    if($TwitchA > $YoutubeA){
        echo "MAYOR AUDIENCIA : TWITCH<br>";
    }else{
        echo "MAYOR AUDIENCIA : YOUTUBE<br>";
    }
?>