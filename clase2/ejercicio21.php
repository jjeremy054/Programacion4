<?php
   if(isset($_POST['btnenviar'])){
    $lado = $_POST['txtlado'];
    $opciones = $_POST['grupo'];
    
    foreach($opciones as $opcion){
    if($opcion=="superficie"){
        $res = $lado * $lado;
        echo "SUPERFICIE :".$res."<br>";
    }
    if($opcion=="perimetro"){
        $res = $lado * 4;
        echo "PERIMETRO :".$res."<br>";
     }
    }
   }
?>