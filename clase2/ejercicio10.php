<?php
   $moneda;
   $c=0;
   do{
    $moneda=rand(1,2);
    $c++;
    if($moneda==1){
        echo"<img src='ejercicio10cara.jpeg' width=150px height=150px>";
    }else{
        echo"<img src='ejercicio10cruz.png' width=150px height=150px>";
    }
   }while($c<10);
?>