<?php
   if(isset($_POST['btnenviar'])){
     $lado = $_POST['txtlado'];
     $calcular = $_POST['grupo'];

     if(!is_numeric($lado)){
        echo "INGRESE UN MONTO NUMERICO";
     }else{
          $lad = floatval($lado);
          if($calcular == "perimetro"){
            $per = $lad * 4;
            echo "PERIMETRO :".$per;
          }
          if($calcular == "superficie"){
            $sup = $lad * $lad;
            echo "SUPERFICIE :".$sup;
          }
     }
   }
?>