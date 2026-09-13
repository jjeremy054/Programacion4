<?php
    echo "100 DADOS<br>";
    $dado;
    for($i=0;$i<100;$i++){
        $dado = rand(1,6);
        $n = $i+1;
        echo "DADO ".$n." : ".$dado."<br>";
    }
?>