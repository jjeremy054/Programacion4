<?php
     if(isset($_POST['btnenviar'])){
        $num1 = $_POST['txtn1'];
        $num2 = $_POST['txtn2'];
        $ope = $_POST['cbxo'];
        
        if(!is_numeric($num1) || !is_numeric($num2)){
            echo "INGRESE NUMEROS VALIDOS";
        }else{
            if($ope == "suma"){
                $n1 = intval($num1);
                $n2 = intval($num2);
                echo "SUMA :".($n1+$n2);
            }
            if($ope == "resta"){
                $n1 = intval($num1);
                $n2 = intval($num2);
                echo "RESTA :".($n1-$n2);
            }
            if($ope == "multiplicacion"){
                $n1 = intval($num1);
                $n2 = intval($num2);
                echo "MULTIPLICAION :".($n1*$n2);
            }
            if($ope == "division" && $num2==0){
                echo "Error aritmetico,Division por cero no interceptada";
            }elseif($ope == "division" && $num2!=0){
                $n1 = intval($num1);
                $n2 = intval($num2);
                echo "DIVISION :".($n1/$n2);
            }
            if($ope == "modulo" && $num2 == 0){
                echo "Error aritmetico,Modulo por cero no valida";
            }elseif($ope == "modulo" && $num2!=0){
                $n1 = intval($num1);
                $n2 = intval($num2);
                echo "MODULO :".($n1%$n2);
            }
        }
     }
?>