<?php
$nombre=$_GET["nombre"];
$apellidos=$_GET["apellidos"];
$direccion=$_GET["direccion"];
$telefono=$_GET["telefono"];

$file=fopen("datospersonales.txt","w");
echo fwrite($file,$nombre."\r\n");
fwrite($file,$apellidos."\r\n");
fwrite($file,$direccion."\r\n");
fwrite($file,$telefono."\r\n");
fclose($file);