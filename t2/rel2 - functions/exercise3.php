<?php
    /*
    Programa que compruebe que si una variable esta vacía

    en caso de que lo esté se rellenará con una frase en minúscula y a continuación se mostrará por pantalla en mayúscula
    si no lo está se saca el contenido de la variable
    */
    
    function functionEmpty($str){
        if (empty($str)){
            $str='his string is empty.';
            return strtoupper($str);
        }
        else{
            return $str;
        }
        return $str;
    }
    echo functionEmpty('');