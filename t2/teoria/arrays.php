<?php
$arrays= array(
    0 => 'valor0',
    1 => 'valor1',
    2 => 'valor2',
    3 => 'valor3',
    4 => 'valor4');
var_dump($arrays[1]);
echo "<br>";

$arrays2= array(
    'A' => 'valor0',
    'B' => 'valor1',
    'C' => 'valor2',
    'D' => 'valor3',
    'E' => 'valor4');
var_dump($arrays2);
echo "<br>";

$arrays3 = array(1,2,3,4,'A','B','C','D');
echo $arrays3[7];
//echo $arrays[5];
$arrays3[]=112;
$arrays3[9]=6;
print_r($arrays3);

echo "<br>FOR EACH NORMAL<br>";

foreach($arrays3 as $arr3){
    echo $arr3."<br>";
}

echo "<br>FOR EACH ARRAY ASOCIATIVO<br>";
foreach($arrays2 as $arr3 => $valor){
    echo "La clave es $arr3 y el valor es $valor<br>";
}

$arra1 = array(
    1 => "3000",
    2 => "4000",
);
$arra2 = array(
    1 => 3000,
    2 => 4000,
);
$arra3 = array(
    1 => "3000",
    2 => "4000",
);
$arra4 = [
    112312512,
    2,
    3,
    4];
echo $arra4[0]."<br>";
$arraycito=$arrays2+$arrays3; //esto es para concatenar cadenas de array. Si las claves son iguales, los del segundo array o los de N array no se añade
var_dump($arraycito);
