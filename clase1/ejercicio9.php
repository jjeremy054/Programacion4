<?php 
    $dolar = 52;
    $coin = 0;
    $bono = 500;
    echo "RECARGA DE MONEDA<br>";
    if($dolar>50){
        echo "COINS OBTENIDOS:".($dolar*100)+$bono;
    }else{
      echo "COINS OBTENIDOS:".$dolar*100;
    }
?>