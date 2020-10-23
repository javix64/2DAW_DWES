<?php
    /* 
    Escribe una función que calcule el máximo común divisor de dos números y un programa para probarla. 
    */
    function gcd($a,$b) {
        return ($a % $b) ? gcd($b,$a % $b) : $b;
    }
    echo gcd(12,21);