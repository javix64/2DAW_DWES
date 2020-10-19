<?php
/*
Escribe una función que reciba una cadena y comprueba si es una matrícula válida. Tiene que tener siete caracteres, los cuatro primeros números y el resto consonantes mayúsculas.
 */

function matriculaValida($matricula){
    $pal;
    for ($i=1; $i < strlen($matricula); $i++) {
        if ($i<4){}
        $pal=substr($matricula,$i,1);
        return $pal;
    }
}
    echo matriculaValida("4512BHL");
