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
echo "A. mostrar <br>";
foreach ($array1 as $arr1) {
    echo "$arr1"."<br>";
}

echo "B. ordenarlo: <br>";

sort($array1);
foreach ($array1 as $arr1) {
    print "$arr1 <br>";
}

echo "C. mostrar longitud:<br>";
echo "La longitud del array es : ".count($array1)."<br>";

echo "D. buscar un elemento del array <br>";
$array_searchit=array_search(57531,$array1);
echo "La posicion del elemento 57531 es: $array_searchit <br>";

echo "E. buscar un elemento del array por URL<br>";

$array_url=$_GET['search'];

$array_searchit=array_search($array_url,$array1);

echo "La posicion del elemento $array_url es $array_searchit <br>";