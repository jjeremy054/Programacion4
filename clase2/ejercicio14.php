<?php
    if(isset($_POST['btnenviar'])){
        $num1 = $_POST['txtn1'];
        $num2 = $_POST['txtn2'];
        $operacion = $_POST['cbxoperacion'];

        if($operacion=="suma"){
            $res = $num1 + $num2;
            echo "LA SUMA ES :".$res;
        }
        if($operacion=="resta"){
            $res = $num1 - $num2;
            echo "LA RESTA es :".$res;
        }
        if($operacion=="multiplicacion"){
            $res = $num1 * $num2;
            echo "LA MULTIPLICACION ES :".$res;
        }
        if($operacion=="division"){
            $res = $num1 / $num2;
            echo "LA DIVISION ES :".$res;
        }
        if($operacion=="resto"){
            $res = $num1 % $num2;
            echo "EL RESTO DE LA DIVISION ES :".$res;
        }
        echo "<br>";
        echo "<a href='ejercicio14.html'>VOLVEER</a>";
    }
?>