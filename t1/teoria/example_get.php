<?php
    $nombre=$_GET["nombre"];
    if(!empty($nombre)){
        echo "Hola ".$nombre;
    }else{
        echo "No has introducido nada <br>";
    }

    $num1=$_GET["num1"];
    $num2=$_GET["num2"];
    if(empty($num1) or empty($num2)){
        echo 'No has introducido los valores correctos';
    }elseif(!is_numeric($num1) or !is_numeric($num2)){
        echo 'Los numeros no son numericos';
    }else{
        echo 'La suma es: '.$num1+$num2;
    }