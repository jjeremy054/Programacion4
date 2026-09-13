<?php
    if(isset($_POST['btnenviar'])){
        $nombre = $_POST['txtnombre'];
        $descripcion = $_POST['txtdescripcion'];
        $precio = $_POST['txtprecio'];
        $promocion = $_POST['rpromo'];
        $impuesto = $_POST['cmbimpuesto'];

        if(empty($nombre)){
            echo "CARGUE EL NOMBRE<br>";
        }elseif(empty($descripcion)){
            echo "CARGUE LA DESCRIPCION<br>";
        }else if(empty($precio)){
            echo "CARGUE EL PRECIO<br>";
        }elseif(!is_numeric($precio)){
            echo "INTRODUZCA UN NUMERO VAlIDO<br>";
        }else{
            $impuestocalculado = $precio*$impuesto;
            $total = $precio + $impuestocalculado;
            $impuestop = $impuesto * 100;
            echo "DATOS BASICOS<br>";
            echo "Nombre :".$nombre."<br>";
            echo "Descripcion :".$descripcion."<br><br>";
            echo "DATOS ECONOMICOS<br>";
            echo "Precio :".$precio."<br>";
            echo "Promocion :".$promocion."<br>";
            echo "Impuestos :".$impuestop."%<br><br>";
            echo "TOTAL A PAGAR<br>";
            echo "Precio :".$precio." Gs.<br>";
            echo "impuesto:".$impuestocalculado." Gs.<br>";
            echo "Total:".$total." Gs.";
        }
    }
 echo "<br><br>";
 echo "<a href='ejercicio2.html'> CARGAR MAS DATOS </a>" ;
?>