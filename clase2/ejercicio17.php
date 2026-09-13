<?php
    if(isset($_POST['btnenviar'])){
        $nombre = $_POST['txtnombre'];
        $apellido = $_POST['txtapellido'];
        $cedula = $_POST['txtcedula'];
        $celular = $_POST['txtcelular'];
        $email = $_POST['txtemail'];
        $fecha = $_POST['txtfecha'];

        echo "DATOS PERSONALES<br>";
        echo "NOMBRE :".$nombre."<br>";
        echo "APELLIDO :".$apellido."<br>";
        echo "Nª DE CEDULA :".$cedula."<br>";
        echo "Nª DE CELULAR :".$celular."<br>";
        echo "EMAIL :".$email."<br>";
        echo "FECHA DE NACIMIENTO :".$fecha."<br>";
    }

?>