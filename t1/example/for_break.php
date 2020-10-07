<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        echo "first for anidado: <br>";
        for ($i=0; $i < 3; $i++) { 
            for ($j=0; $j < 3; $j++) { 
                echo "i: $i j:$j <br>";
                if($j==1){
                    break;
                }
            }
        }

        echo "second for anidado: <br>";
        for ($i=0; $i < 3; $i++) { 
            for ($j=0; $j < 3; $j++) { 
                echo "i: $i j:$j <br>";
                if($j==1){
                    break 2;
                }
            }
        }

    ?>
</body>
</html>