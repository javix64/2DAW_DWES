<?php
    /* Ejercicio 14
    Escriba un script que cada vez que se ejecute muestre un línea de longitud entre 10 y 1000 píxeles (Deberemos recoger la longitud  por URL con GET)
    Por ejemplo: */
    $num = $_GET['num'];
    if($num>=10 && $num<=1000){
        echo "
        <svg height='50' width='700'>
        <line x1=".$num." y1='0' x2='0' y2='0' style='stroke:rgb(0,0,0);stroke-width:40' />
        </svg>";
    }else{
        echo "debes introducir un numero entre 10 y 1000";
    }