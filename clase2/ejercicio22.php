<?php
   
    $numero = 1;
    $c = 0;
    do{
        if($numero==1){
            echo "SUMA :".$numero."<br>";
            $ran = rand(1,20);
            $numero += $ran;
            $c++;
        }else{
            $n1 = $numero - $ran;
            echo "SUMA :".$n1." + ".$ran." = ".$numero."<br>";
            $ran = rand(1,20);
            $numero += $ran;
            $c++;
        }
    }while($numero<1000);
    echo "TOTAL NUMEROS SUMADOS :".($c-1)."<br>";
?>
