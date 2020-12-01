<?php
/*
Escribe un script que rellene un array con valores aleatorios (0,1) y lo muestre. A continuación, calcularemos su complementario y también la mostraremos. 
A: 1 1 1 0 0 1 0 1 0 0
B: 0 0 0 1 1 0 1 0 1 1
*/
$array_bits=[];
$array_bits_complementario=[];
for ($i=1; $i <=10; $i++) { 
    array_push($array_bits,rand(0,1));
    
}
echo "A: ";
foreach ($array_bits as $ab) {
    echo $ab;
}
echo "<br>";

foreach ($array_bits as $ab) {
    if($ab==0){
        array_push($array_bits_complementario,1);
    }elseif($ab==1){
        array_push($array_bits_complementario,0);
    }
}
echo "B: ";
foreach ($array_bits_complementario as $abc) {
    echo $abc;

}