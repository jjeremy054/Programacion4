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
    $num=0;
    $sum=0;
    $c=0;
    echo "<div class='text-white text-center bg-primary py-3'>NUMEROS PROCESADOS: </div>";
    do{
       $num++;
       echo "<div class='bg-success text-white py-1'>NUMERO :".$num."</div>";
       $sum+=$num;
       $c++;
    }while($sum<=1000);
    echo "<div class='bg-danger text-white text-center'>TOTAL ACUMULADO: ".$sum."</div>";
    echo "<div class='bg-danger text-white text-center'>CANTIDAD DE CICLOS EFECTUADOS: ".$c."</div>";
?>
</body>
</html>
    