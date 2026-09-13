<?php
    $latencia = 100;
    echo "MEDICION DE LATENCIA<br>";
    if($latencia<50){
        echo "CONEXION  EXCELENTE";
    }else if($latencia>=50 && $latencia<=120){
        echo "CONEXION ACEPTABLE";
    }else if($latencia>120){
        echo "CONEXION INESTABLE";
    }
?>