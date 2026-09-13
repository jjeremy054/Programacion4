<?php
    if(isset($_POST['btnenviar'])) {//si existe el boton se usa isset
    $nombre = $_POST['txtnombre'];//el txtnombre es el name en html ,php usa solo el name
    $apellido = $_POST['txtapellido'];
    $estado = $_POST['radioe'];
    $ciudad = $_POST['cbxciudad'];
    $contrasena = $_POST['txtcontrasena'];
    
    if($contrasena == '12345678'){
        echo "<strong>Sr/a : </strong>".$nombre." ".$apellido."<br>"; 
    }else{
        echo "DATOS INCORRECTOS<br>";
    }
}
    echo "<a href='ejercicio1.html'> CARGAR MAS DATOS </a>" ;
?>