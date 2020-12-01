<?php
/*
Programa que añada valores a un array mientras que su longitud sea menor que 120.

Después mostrará la información del array por pantalla
*/

$array1=[];

for ($i=1; $i <=120 ; $i++) { 
    array_push($array1, $i);
}
echo "El array es: <br>";
foreach ($array1 as $arr1) {
    echo "$arr1 <br>";
}