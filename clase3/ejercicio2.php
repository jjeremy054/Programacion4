<?php
   if(isset($_POST['btnenviar'])){
    $fah = $_POST['txtf'];

    if(!is_numeric($fah)){
         echo "INGRESE UN NUMERO VALIDO";
    }elseif($fah<-50 or $fah>150){
        echo "INGRESE UNA TEMPERATURA VALIDA";
    }else{
        $fahren = floatval($fah);
        $c = 5.0/9.0 * ($fahren-32.0);
        echo "TEMPERATURA DE FAHRENHEIT A CELSIUS:".$c." ºC";
    }
   }
?>