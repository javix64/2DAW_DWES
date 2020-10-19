<?php
    /*
    Escribe la función calculador:
    la función calculador recibe como argumentos dos números y  la operación que debe de aplicarles ( en realidad, la función que queremos aplicar). Según que función se le pase como argumento, devolverá un valor u otro. Suma, resta, multiplicación, etc.
    */
    function example1($num1,$num2,$calculate){
        switch ($calculate) {
            case 'suma':
                echo $num1+$num2;
                break;
            case 'resta':
                return $num1-$num2;
                break;
            case 'multiplicacion':
                return $num1*$num2;
                break;
            case 'division':
                return $num1/$num2;
                break;
            default:
                echo 'Enter a number';
                break;
        }
        
    }
    example1(2,10,'suma');