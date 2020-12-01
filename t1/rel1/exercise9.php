<?php
    /* Ejercicio 9

    Escribe un programa que permita realizar las operaciones básicas de una calculadora: suma, resta, multiplicación y división. (Deberemos recoger dos números por URL con GET) */
    $case=isset($_GET['case']);
    $num1=isset($_GET['num1']);
    $num2=isset($_GET['num2']);
    $total;
    switch ($case) {
        case 'suma':
            $total=$num1+$num2; 
            echo $total;
            break;
        case 'resta':
            $total=$num1-$num2;
            echo $total;
            break;
        case 'mult':
            $total=$num1*$num2; 
            echo $total;
            break;
        case 'div':
            $total=$num1/$num2; 
            echo $total;
            break;
        
        default:
            echo('ERROR');
            break;
    }