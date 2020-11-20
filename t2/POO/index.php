<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>
<h2>POO-HERENCIA.PHP</h2>
<?php 
    include('poo-herencia.php');
    $mazda= new Coche();
    $pegaso = new Camion();
    echo "El Mazda tiene ".$mazda->get_ruedas()." ruedas <br>";
    echo "El pegaso tiene ".$pegaso->get_ruedas()." ruedas <br>"
?>
<br>
<h2>CONCESIONARIO.PHP</h2>
<?php 
    include("concesionario.php");
    $compra_Antonio = new Compra_vehiculo("compacto");
    $compra_Antonio->climatizador();
    $compra_Antonio->tapiceria_cuero("blanco");
    echo $compra_Antonio->precio_final();


?>

</body>

</html>