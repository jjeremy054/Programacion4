<?php  
     echo "DADOS CONSECUTIVOS<br>";
     $dado;
     $consecutivo=0;
     do{
        $dado = rand(1,6);
        echo "DADO ".$dado."<br>";
        if($dado==4){
            $consecutivo++;
        }else{
            $consecutivo=0;
        }
     }while($consecutivo<3);
?>