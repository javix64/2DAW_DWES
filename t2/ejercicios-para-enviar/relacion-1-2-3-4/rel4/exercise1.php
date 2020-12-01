<?php
/*

Modifica el ejercicio cálculo de un factorial para que controle si el argumento es negativo utilizando una excepción.

Usa: InvalidArgumentException

*/
try{
    $n=-2;
    if($n<0){
        throw new Exception ("No se puede calcular el factorial de un número negativo");
    }
    $fact=0;
    if($n==0){
        return 1;
    }
    else{
        $fact=$n;
    }
    echo $fact;
    
}catch(Exception $e){echo"Excepcion: ".$e->getMessage()."<br>";};
