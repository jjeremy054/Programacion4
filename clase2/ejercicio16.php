<?php
  if(isset($_POST['btnenviar'])){
    $n1 = $_POST['txtn1'];
    $n2 = $_POST['txtn2'];

    if(isset($_POST['grupo'])){
    $grupo = $_POST['grupo'];

    foreach($grupo as $operador){
    if($operador=="suma"){
        $res = $n1 + $n2;
        echo "LA SUMA ES :".$res."<br>";
    }
    if($operador=="resta"){
        $res = $n1 - $n2;
        echo "LA RESTA ES :".$res."<br>";
    }
    if($operador=="multiplicacion"){
        $res = $n1 * $n2;
        echo "LA MULTIPLICACION ES :".$res."<br>";
    }
    if($operador=="division"){
        $res = $n1 / $n2;
        echo "LA DIVISION ES :".$res."<br>";
    }
    if($operador=="resto"){
        $res = $n1 % $n2;
        echo "EL RESTO ES :".$res."<br>";
    }
   }
  }
 }
  echo "<br>";
  echo "<a href='ejercicio16.html'>VOLVEER</a>";
?>