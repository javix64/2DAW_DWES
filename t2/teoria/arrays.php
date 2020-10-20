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