<?php
$file=fopen("datospersonales.txt","r");
$archivo=fread($file,filesize("datospersonales.txt"));
print $archivo;
fclose($file);