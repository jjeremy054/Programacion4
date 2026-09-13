<?php
     $contrasena="USUARIOo";
     echo "VERIFICACION DE CONTRASEÑA<br>";
     if(strlen($contrasena)<8){
        echo "ingrese una contraseña con mas de 8 caracteres<br>";
     }else if(stripos($contrasena,"usuarioo")!==false){
        echo "contraseña invalida";
     }else{
        echo "contraseña verificada";
     }
?>