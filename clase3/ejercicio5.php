<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
   if(isset($_POST['btnenviar'])){
    $lado = $_POST['txtlado'];
    $calcular = $_POST['grupo'];

    if(!is_numeric($lado)){
        echo "<div class='alert alert-danger text-center'>INGRESE MONTO NUMERICO</div>";
    }else{
         $lad = floatval($lado);
         if(empty($calcular)){
            echo "<div class='alert alert-danger'>ELIJA UNA OPERACION A CALCULAR</div>";
         }else{
            foreach($calcular as $cal){
              if($cal == "perimetro"){
                $per = $lad * 4;
                echo "<div class='alert alert-success rounded my-0 py-4'>PERIMETRO :".$per."</div>";
              }
              if($cal == "superficie"){
                $sup = $lad * $lad;
                echo "<div class='alert alert-primary rounded py-4'>SUPERFICIE :".$sup."</div>";
              }
            }
         }
       }
   }
?>
</body>
</html>