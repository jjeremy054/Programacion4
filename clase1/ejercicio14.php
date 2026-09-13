<?php
    $peticion = 7000;
    $costofinal = (0.05 * $peticion)/1000;
    echo "COSTO ESTIMADO POR PETICIONES HTTP<br>";
    echo "COSTO FINAL:".$costofinal." $<br>";
    echo "COSTO FINAL MENSUAL:".$costofinal+20.0 ." $";
?>