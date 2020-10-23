<?php
/*
Escribe una función que reciba una cadena y comprueba si es una contraseña válida. Hay que comprobar que tenga: 

– Entre 6 y 15 caracteres.

– Al menos un número. 

– Al menos una letra mayúscula. 

– Al menos una letra minúscula. 

– Al menos un carácter no alfanumérico

*/

function requirePassword($password){
    if(strlen($password)>=6 && strlen($password)<=15 && preg_match('~[0-9]+~', $password) && preg_match('~[A-Z]+~', $password) && preg_match('~[a-z]+~', $password) && preg_match("~[!-\\\]+~", $password)){
        echo "La password es correcta";
    }else{
        echo "La password no es correcta.";
    }
}

requirePassword("Abcdef1!");
/*
function requirePassword2($password){
    $mayus=FALSE;
    $minus=FALSE;
    $numeros=FALSE;
    $noalfanumerico=FALSE;
    for ($i=0; $i < strlen($password); $i++) { 
        if(ctype_upper($password[$i])){
            $mayus=TRUE;
        }
        elseif(ctype_lower($password[$i])){
            $minus=TRUE;
        }
        elseif(ctype_digit($password[$i])){
            $numeros=TRUE;
        }
        elseif(!ctype_alnum($password[$i])){
            $noalfanumerico=TRUE;
        }
    }
    return $minus && $mayus && $numeros and $noalfanumerico;
}
echo "<br>funcion 2 ".requirePassword2("Abcdef1!");
*/