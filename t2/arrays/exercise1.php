<?php
/*
Escribe un script que almacene un array de 8 números enteros:
a.recorrerá el array y lo mostrará
b.lo ordenará y lo mostrará
c.mostrará su longitud
d.buscará un elemento dentro del array
e.buscará un elemento dentro del array, pero por el parámetro que llegue a la URL
Para mostrar los elementos del array en cada uno de los apartados se creará una función llamada mostrarArray(). 
*/
$array1=[124,241,35446,13445,57531,635,71,908];
echo "A ordenado <br>";

foreach ($array1 as $key) {
    echo "$key"."<br>";
}

echo "B. ordenarlo: <br>";

$array_ordenado=sort($array1);
echo $array_ordenado;