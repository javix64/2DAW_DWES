<?php
    /* Ejercicio 5
    Realiza un conversor de euros a dólares */
    $euros=$_POST['euro-a-dolar'];
    $dolares=$euros*1.17;
    if ($euros<=1) {
        echo $euros.' euro equivale a '.$dolares.' dolares';
    }else {
        echo $euros.' euros equivale a '.$dolares.' dolares';
    }