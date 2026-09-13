<?php
 if(isset($_POST['btncalcular'])){
    $num1 = $_POST['txtn1'];
    $num2 = $_POST['txtn2'];
    $operacion = $_POST['rdbgrupo'];

    if($operacion=="suma"){
        $res = $num1 + $num2;
        echo "LA SUMA ES :".$res;
    }
    if($operacion=="resta"){
        $res = $num1 - $num2;
        echo "LA RESTA ES :".$res;
    }
    if($operacion=="multiplo"){
        $res = $num1*$num2;
        echo "LA MULTIPLICACION ES:".$res;
    }
    if($operacion=="division"){
        $res = $num1 / $num2;
        echo "LA DIVISION ES :".$res;
    }
    if($operacion=="resto"){
        $res = $num1 % $num2;
        echo "EL RESTO DE LA DIVISION ES:".$res;
    }
    echo "<br>";
    echo "<a href='ejercicio13.html'>VOLVEER</a>";
 }
 ?>