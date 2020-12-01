<?php
    /* Ejercicio 13
    Escriba un script muestre la tirada de dos dados al azar (usar rand) y diga:

    si ha salido una pareja de valores iguales
    o el mayor de los valores que se han obtenido en la tirada */
    $dado1=rand(1,6);
    $dado2=rand(1,6);

    echo "El dado 1 es: ".$dado1." ".dado($dado1)."<br>";
    echo "El dado 2 es: ".$dado2." ".dado($dado2)."<hr>";
    if($dado1==$dado2){
        echo "Los dados tienen el mismo valor"."<br>";
    }elseif ($dado1>$dado2) {
        echo "El dado 1: ".$dado1." es mayor que el dado 2:".$dado2."<br>";
    }elseif ($dado1<$dado2) {
        echo "El dado 2: ".$dado2." es mayor que el dado 1:".$dado1."<br>";
    }
    
    function dado($num1){
        switch ($num1) {
            case 1:
                echo " * ";
                break;
            case 2:
                echo " * * ";
                break;
            case 3:
                echo " * * * ";
                break;
            case 4:
                echo " * * * * ";
                break;
            case 5:
                echo " * * * * * ";
                break;
            case 6:
                echo " * * * * * * ";
                break;
        }
    }