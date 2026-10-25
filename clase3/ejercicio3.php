<?php
     if(isset($_POST['btnenviar'])){
        $num1 = $_POST['txtn1'];
        $num2 = $_POST['txtn2'];
        $ope = $_POST['cbxo'];
        
        if(!is_numeric($num1) || !is_numeric($num2)){
            echo "INGRESE NUMEROS VALIDOS";
        }else{
            $n1 = intval($num1);
            $n2 = intval($num2);
            if($ope == "suma"){
                echo "SUMA :".($n1+$n2);
            }
            if($ope == "resta"){
                echo "RESTA :".($n1-$n2);
            }
            if($ope == "multiplicacion"){
                echo "MULTIPLICAION :".($n1*$n2);
            }
            if($ope == "division" && $n2==0){
                echo "Error aritmetico,Division por cero no interceptada";
            }elseif($ope == "division" && $n2!=0){
                echo "DIVISION :".($n1/$n2);
            }
            if($ope == "modulo" && $n2 == 0){
                echo "Error aritmetico,Modulo por cero no valida";
            }elseif($ope == "modulo" && $n2!=0){
                echo "MODULO :".($n1%$n2);
            }
        }
     }
?>