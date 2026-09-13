<?php
    if(isset($_POST['btnenviar'])){
        $lado = $_POST['txtlado'];
        $opcion = $_POST['txtopcion'];

        foreach($opcion as $op){
            if($op=="superficie"){
                $res = $lado * $lado;
                echo "SUPERFICIE DE CUADRADO :".$res."<br>";
            }
            if($op=="perimetro"){
                $res = $lado *4;
                echo "PERIMETRO DEL CUADRADO :".$res."<br>";
            }
        }
    }