<?php
    /* 
        Escribe una función para calcular el factorial de un número que recibirá como argumento
    */
    function factorialSinRecursividad($num){
        $num1;
        for( $i=$num;$i>=0;$i--){
            echo $num1."<br>";
            $num1+=$num*($num-1);
            }
        return $num1;
    }
    echo "Factorial sin recursividad ".factorialSinRecursividad(5)."<br>";

    function factorialConRecursividad($num){
        if ($num>=1){
            return ($num * factorialConRecursividad($num - 1));
        }else{
            return true;
        }
    }
    echo "Factorial con recursividad ".factorialConRecursividad(5)."<br>";
    function mostrarFactorial($num){
        
    }