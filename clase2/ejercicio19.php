<?php
   if(isset($_POST['btnenviar'])){
    $lado = $_POST['txtlado'];
    $opcion = $_POST['txtopcion'];

    if($opcion=="superficie"){
        $area = $lado * $lado;
        echo "LA SUPERFICIE DEL CUADRADO :".$area."<br>";
    }
    if($opcion=="perimetro"){
        $p = $lado * 4;
        echo "PERIMETRO DE CUADRADO :".$p."<br>";
    }
   }
?>