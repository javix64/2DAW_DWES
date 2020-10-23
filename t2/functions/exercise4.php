<?php
    /*
    Escribe una  función para calcular potencias. 
    La función recibe como argumentos la base y el exponente (que es opcional y tiene por defecto el valor 2)
    */
    function potencias($base,$exponente){
        return $base**$exponente;
    }
    echo potencias(2,3);