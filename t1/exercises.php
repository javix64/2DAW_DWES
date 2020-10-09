<html>
<head>
    <title>Theme 1</title>
    <style>
        table,tr,td{
            border:1px solid black;
        }
    </style>
</head>
<body>
    <?php
    echo '<h1>Exercises</h1>';
    echo '<h2>Exercise1</h2>';
    $m=1;
    for($i=1; $i<=5; $i++) {
        for($j=$i; $j<=4; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for($k=1; $k<=$m; $k++)  {
            echo "*";
        }
        for($c=$m; $c>1; $c--) {
            echo "*";
        }
        echo "<br>";
        $m++;
    }
    echo '<h2>Exercise2</h2>';

    echo '<h2>Exercise3</h2>';
    echo 'La ecuacion de segundo grado a resolver es: 2x^2+4x+1=0'.'<br/>';

    $a=2;
    $b=4;
    $c=1;
    $resultado1=-$b+sqrt(($b*$b)-(4*$a*$c))/(2*$a);
    $resultado2=-$b-sqrt(($b*$b)-(4*$a*$c))/(2*$a);
    echo "El resultado 1 es: "."$resultado1"."<br/>";
    echo "El resultado 2 es: "."$resultado2";
    // (-b +-V b^2 -4ac)/(2a)

    echo '<h2>Exercise4</h2>';
    echo '
    <table>
        <tr>
            <td>Numero en ingles</td>
            <td>Numero en español</td>
        </tr>
        <tr>
            <td>One</td>
            <td>Uno</td>
        </tr>
        <tr>
            <td>Two</td>
            <td>Dos</td>
        </tr>
        <tr>
            <td>Three</td>
            <td>Tres</td>
        </tr>
        <tr>
            <td>Four</td>
            <td>Cuatro</td>
        </tr>
        <tr>
            <td>Five</td>
            <td>Cinco</td>
        </tr>
        <tr>
            <td>Six</td>
            <td>Seis</td>
        </tr>
        <tr>
            <td>Seven</td>
            <td>Siete</td>
        </tr>
        <tr>
            <td>Eight</td>
            <td>Ocho</td>
        </tr>
        <tr>
            <td>Nine</td>
            <td>Nueve</td>
        </tr>
        <tr>
            <td>Ten</td>
            <td>Diez</td>
        </tr>
    </table>';
    ?>
    <h2>Exercise5</h2>
    <form action="ejercicio5.php" method=POST>
        Introduce Euros: <input type="number" name="euro-a-dolar">
        <input type="Submit" name="Convertir!" value="Enviar">  
    </form>
    <h2>Exercise 6</h2>
    <h2>Exercise 7</h2>

    <?php
        for ($i=0; $i <= 100; $i++) { 
            if(($i%2)==0){
                echo "The number $i is par <br>";
            }
        }
    
    echo '<h2>Exercise 8</h2>';
    /* $count=0;
    while ($count <= 40) {
        $cuadrado=$count*$count;
        echo "El cuadrado de $count is $cuadrado <br>";
    } */
    ?>
    </body>
</html>