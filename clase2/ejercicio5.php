<?php
    $dado1 = rand(1,6);
    $dado2 = rand(1,6);
    echo "LANZAR PRIMER DADO<br>";
    if($dado1==1) echo "numero 1";
    if($dado1==2) echo "numero 2";
    if($dado1==3) echo "numero 3";
    if($dado1==4) echo "numero 4";
    if($dado1==5) echo "numero 5";
    if($dado1==6) echo "numero 6";
    echo "<br>LANZAR SEGUNDO DADO<br>";
    if($dado2==1) echo "numero 1";
    if($dado2==2) echo "numero 2";
    if($dado2==3) echo "numero 3";
    if($dado2==4) echo "numero 4";
    if($dado2==5) echo "numero 5";
    if($dado2==6) echo "numero 6";
    $suma = $dado1 + $dado2;
    echo "<br>SUMA DE VALORES:".$suma;
?>