<?php
/*
Escriba un programa que guarde en un array 20 valores aleatorios entre 0 y 100.

En un segundo array llamado cuadrados deberá almacenar los cuadrados de los valores que hay en el primer array.

En un tercer array llamado cubo se deben almacenar los cubos de los valores que hay en el primer array.
Se deberá mostrar el contenido de los tres arrays dispuesto en tres columnas paralelas
*/
$array1=[];
$aleatorio;
echo "Escriba un programa que guarde en un array 20 valores aleatorios entre 0 y 100. = <br>";
for ($i=0; $i < 20; $i++) {
    $aleatorio = rand(0,100);
    array_push($array1,$aleatorio);
    print_r($array1[$i]);
    echo "<br>";
}


echo "<br>";
echo "<br>";

//------------------------------
echo "En un segundo array llamado cuadrados deberá almacenar los cuadrados de los valores que hay en el primer array. <br>";
$cuadrado=[];
for ($i=0; $i < 20; $i++) { 
    array_push($cuadrado,$array1[$i]**2);
    print_r($cuadrado[$i]);
    echo "<br>";
}

echo "<br>";
echo "<br>";

//------------------------------

$cubo=[];
echo "En un tercer array llamado cubo se deben almacenar los cubos de los valores que hay en el primer array.<br>
Se deberá mostrar el contenido de los tres arrays dispuesto en tres columnas paralelas <br>";
for ($i=0; $i < 20; $i++) { 
    array_push($cubo,$array1[$i]**3);
    print_r($cubo[$i]);
    echo "<br>";
}

echo "<br>";
echo "<br>";
echo "<table border='2'>";
echo "<tr>";
echo "<td>";
echo "Numero aleatorio";
echo "</td>";
echo "<td>";
echo "Cuadrado";
echo "</td>";
echo "<td>";
echo "Cubo";
echo "</td>";
echo "</tr>";
for ($i=0; $i < 20; $i++) { 
    //primera columna array1
    echo "<tr>";    
    echo "<td>";
    print_r($array1[$i]);
    echo "</td>";
    //segunda columna = cuadrado
    echo "<td>";
    print_r($cuadrado[$i]);
    echo "</td>";
    //segunda columna = cubo
    echo "<td>";
    print_r($cubo[$i]);
    echo "</td>";
    echo "</tr>";
}
echo "</table>";