<?php
//8x8 casillas
$blanco="<div class='blanco'></div>";
$negro="<div class='negro'></div>";

for ($i=0; $i < 4; $i++) { 
    for ($j=0; $j < 4; $j++) { 
        echo $blanco;
        echo $negro;
    }
    for ($k=0; $k < 4; $k++) { 
        echo $negro;
        echo $blanco;
    }
}