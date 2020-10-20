<?php
/*
Escribe una función que reciba una cadena y comprueba si es una matrícula válida. Tiene que tener siete caracteres, los cuatro primeros números y el resto consonantes mayúsculas.
 */

function matriculaValida($matricula){
    $pal;
    
        $numbers=substr($matricula,0,4);
        $words=substr($matricula,5,7);

        if (is_numeric($numbers)){
            echo "The first four digits are numbers."."<br>";
        }else{
            echo "There is a digit that is not number."."<br>";
        }
        if(is_string($words)){
            echo "The three last digits are words."."<br>";
        }else{
            echo "There is a digit that is not a word."."<br>";
        }
}
matriculaValida("4512BHL");