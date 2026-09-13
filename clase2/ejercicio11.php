<?php 
  echo "<h3>CARRERA DE CABALLOS</h3>";
  $caballo1= 0;
  $caballo2= 0;
  $meta = 50;
  $turno = 1;

  while($caballo1 < $meta && $caballo2 < $meta){
      echo "<b>TURNO ".$turno."</b><br>";
      $caballo1 += rand(1,6);
      $caballo2 += rand(1,6);
      echo "CABALLO 1: ".$caballo1." metros<br>";
      echo "CABALLO 2: ".$caballo2." metros<br>";
      $turno++;
  }
  if($caballo1 >= $meta && $caballo2 >= $meta){
    echo "EMPATEEEEE";
  }elseif($caballo1 >= $meta){
    echo "GANO EL CABALLO 1";
  }elseif($caballo2 >= $meta){
    echo "GANO EL CABALLO 2";
  }
?>