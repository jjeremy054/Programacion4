<?php
     if(isset($_POST['btnenviar'])){
      $nombre = trim($_POST['txtnombre']);
      $apellido = trim($_POST['txtapellido']);
      $cedula = $_POST['txtcedula'];
      $celu = $_POST['txtcelu'];
      $celular = trim($_POST['txtcelular']);
      $email_antes = trim($_POST['txtemail']);
      $fecha = $_POST['txtfecha'];
      $email = filter_var($email_antes,FILTER_VALIDATE_EMAIL);
   
    if(!is_numeric($cedula)){
        echo "valiar numero";
    }elseif(!$email){
        echo "valiar email";
    }elseif(empty($fecha)){
        echo "valiar fecha";
    }else{
        echo "DATOS PERSONALES<br>";
      echo "Nombre : ".$nombre."<br>";
      echo "Apellido : ".$apellido."<br>";
      echo "Cedula : ".$cedula."<br>";
      echo "Celular : ".$celu.$celular."<br>";
      echo "Correo : ".$email."<br>";
      echo "Fecha de nacimiento : ".$fecha."<br>";
    }
    }
?>     