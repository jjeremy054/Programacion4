<?php
if(isset($_POST['btnenviar'])){
    $lado = $_POST['txtlado'];
    $eleccion = $_POST['grupo'];
    if($eleccion=="superficie"){
        $area = $lado * $lado;
        echo "LA SUPERFICIE DEL CUADRADO :".$area."<br>";
    }else{
        $p = $lado * 4;
        echo "PERIMETRO DE CUADRADO :".$p."<br>";
    }
}
?>