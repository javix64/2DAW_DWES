<?php
//Escribe una función para comprobar si un número es primo y un programa para probarla
function esPrimo($num1){
    if(($num1%2)!=0){
        return "Es primo";
    }
    else{
        return "No es primo";
    }
}
echo esPrimo(10);