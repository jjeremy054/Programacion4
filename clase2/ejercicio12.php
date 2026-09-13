<?php 
  echo "<h3>CARRERA DE CABALLOS</h3>";
  $caballo1= 0;
  $caballo2= 0;
  $caballo3= 0;
  $caballo4= 0;
  $caballo5= 0;

  $meta = 50;
  $turno = 1;

  while($caballo1 < $meta && $caballo2 < $meta && $caballo3 < $meta && $caballo4 < $meta && $caballo5 < $meta){
      echo "<b>TURNO ".$turno."</b><br>";
      $caballo1 += rand(1,6);
      $caballo2 += rand(1,6);
      $caballo3 += rand(1,6);
      $caballo4 += rand(1,6);
      $caballo5 += rand(1,6);
      echo "CABALLO 1: ".$caballo1." metros<br>";
      echo "CABALLO 2: ".$caballo2." metros<br>";
      echo "CABALLO 3: ".$caballo3." metros<br>";
      echo "CABALLO 4: ".$caballo4." metros<br>";
      echo "CABALLO 5: ".$caballo5." metros<br>";
      $turno++;
  }
  if($caballo1 >= $meta && $caballo2 >= $meta && $caballo3 >= $meta && $caballo4 >= $meta && $caballo5 >= $meta){
    echo "EMPATEEEEE";
  }elseif($caballo1 >= $meta){
    echo "GANO EL CABALLO 1";
  }elseif($caballo2 >= $meta){
    echo "GANO EL CABALLO 2";
  }elseif($caballo3 >= $meta){
    echo "GANO EL CABALLO 3";
  }elseif($caballo4 >= $meta){
    echo "GANO EL CABALLO 4";
  }elseif($caballo5 >= $meta){
    echo "GANO EL CABALLO 5";
  }
?>