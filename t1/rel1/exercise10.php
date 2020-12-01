<?php
    /* Ejercicio 10

    Haz un script para mostrar todos los números comprendidos entre los dos valores que nos lleguen por la URL. Por ejemplo, si llegan el 5 y el 9 mostraremos los valores 6,7 y 8.
    
    Deberemos asegurarnos de que hemos recibido los dos parámetros y que el primer número es menor que el segundo. */
    $numero1=$_GET['numero1'];
    $numero2=$_GET['numero2'];
    if(isset($numero1) && isset($numero2)){
        for($i=$numero1+1;$i<$numero2;$i++){
            echo "$i <br>";
        }
    }else{
        echo "Error al introducir numero";
    }