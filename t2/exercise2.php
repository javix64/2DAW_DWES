<?php
    /* 
        Escribe una función para calcular el factorial de un número que recibirá como argumento
    */
    function factorial($num){
        $num1;
        for( $i=$num;$i>=0;$i--){
            $num1+=$num*($num-1);
            }
        return $num1;
    }
    echo factorial(5);