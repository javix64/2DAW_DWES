<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablero de Ajedrez</title>
    <style>
        div.blanco{
            background-color:#f0be8d;
            width:50px;
            height:50px;
            float:left;
        }
        div.negro{
            background-color:#723719;
            width:50px;
            height:50px;
            float:left;
        }
        #tablero{
            width:400px;
            height:400px;
            border: 10px solid black;
        }
    </style>    
</head>
<body>
    <div id="tablero">
    <?php include ('ajedrez.php')?>
    </div>
</body>
</html>