<?php
/*

Escriba un script que cree un array con 15 números aleatorios y los muestre en pantalla.

A continuación, rotará los elementos de ese array una posición. Es decir, el elemento de la posición 0 debe pasar a la posición 1, el de al 1 a la 2, …, el elemento de la última posición pasará a la posición 0. 
Por último, mostrará el nuevo contenido del array.
*/

$array1=[];
for ($i=0; $i < 15; $i++) { 
    $random=rand(1,15);
    $array1[$i]=$random;
    echo $array1[$i];
    echo "<br>";
}
echo "---------<br>";
$ultimo=array_pop($array1);
array_unshift($array1,$ultimo);
for ($i=0; $i < 15; $i++) { 
    echo $array1[$i];
    echo "<br>";
}