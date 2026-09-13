<?php
    if(isset($_POST['btnenviar'])){
        $n1 = $_POST['txtn1'];
        $n2 = $_POST['txtn2'];

        //verificar el combobox multiplo
        if(isset($_POST['cbxo'])){
        $operaciones = $_POST['cbxo'];

        foreach($operaciones as $operacion){
        if($operacion=="suma"){
            $res = $n1 + $n2;
            echo "SUMA :".$res."<br>";
        }
        if($operacion=="resta"){
            $res = $n1 - $n2;
            echo "RESTA :".$res."<br>";
        }
        if($operacion=="multiplicacion"){
            $res = $n1 * $n2;
            echo "MULTIPLICACION :".$res."<br>";
        }
        if($operacion=="division"){
            $res = $n1 / $n2;
            echo "DIVISION :".$res."<br>";
        }
        if($operacion=="resto"){
            $res = $n1 % $n2;
            echo "RESTO :".$res."<br>";
        }
        }
    }
}
echo "<br>";
echo "<a href='ejercicio15.html'>VOLVEER</a>";
?>