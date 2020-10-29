<?php
/*
Escriba un programa que:
    Muestre un grupo de entre 20 y 30 animales al azar.

Se usará un array para almacenar el código de los animales. 

El número de elementos del array será el determinado aleatoriamente entre 20 y 30.

Tenga en cuenta que los animales son caracteres con rango Unicode: 128000 a 128060.

A continuación, mostrará un animal al azar de los que están incluidos en el grupo anterior y lo eliminará del array. Por ejemplo:

Por último, mostrará de nuevo el grupo inicial, pero habiendo eliminado del grupo los animales que coincidan con el animal suelto (al menos habrá uno). También mostrará un mensaje con el número total de animales que quedan.  En el ejemplo anterior quedarían 21 animales. 

Notas:
    uso de las funciones  rand(), array_rand(), unset.
    Crea las funciones que consideres oportunas.
*/
$array1;
$arr_ale=rand(20,30);
echo "Hay $arr_ale animales <br>";
echo "<table border=1>";
echo"<tr>";
for ($i=0; $i < $arr_ale; $i++) {
    echo"<td>";
    $uni_ale= rand(128000,128060);
    $array1[$i]="&#$uni_ale";
    print_r($array1[$i]);
    echo "<br>";
    echo"</td>";
}
echo "</tr>";
echo "</table><br>";
echo "El animal a eliminar es: ";
$animal_aleatorio=array_rand($array1,1);
echo $array1[$animal_aleatorio];
unset($array1[$animal_aleatorio]);

echo "<table border=1>";
echo"<tr>";
for ($i=0; $i < count($array1); $i++) { 
    echo"<td>";
    print_r($array1[$i]);
    echo "<br>";
    echo"</td>";
}
echo "</tr>";
echo "</table><br>";
echo "Quedan ".count($array1)." animales";