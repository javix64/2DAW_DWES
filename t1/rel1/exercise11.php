<?php
    /* Ejercicio 11

    Imprimir por pantalla todas las tablas de multiplicar de 1 a 10 dentro de una tabla HTML */
    echo "<table border='2'>";
    for ($i=0+1; $i <= 10; $i++) { 
        echo "<tr>";
        for ($j=0; $j <= 10; $j++) {
            
            echo "<td>".$i." x ".$j." =".$i*$j."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";