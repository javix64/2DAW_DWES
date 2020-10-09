<?php
    /* Ejercicio 12

    Modificación del ejercicio  7  para mostrar todos los números impares entre dos números que nos lleguen  por la URL usando parámetros con GET
    */
    $num1=$_GET['num1'];
    $num2=$_GET['num2'];
    if(isset($num1) && isset($num2)){
        for ($i=$num1; $i <= $num2; $i++) { 
            if(($i%2)!=0){
                echo "El numero $i es impar <br>";
            }
        }
    }else{
        echo "error al introducir numeros";
    }