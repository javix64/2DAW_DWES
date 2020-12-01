<?php

//////////////////////////////////////////////
//  formulario HTML para enviar ficheros    //
//////////////////////////////////////////////
echo '
<html>
<head> <title>Ejemplo 21</title></head>
<body>
 <h1> Ejemplo de Formulario 3 </h1>
<p>

<form enctype="multipart/form-data" action="ej22.php" method="post">
     Fichero: <input type="file" name="fichero_usuario">
     <br> 
     <input type="submit" value="Enviar Fichero">
</form>

</body>
</html>';


//////////////////////////////////////////////
//  formulario HTML para recibir ficheros   //
//////////////////////////////////////////////

echo'
<html>
<head> <title>Ejemplo 22</title></head>
<body>
 <h1> Ejemplo de Formulario 3 </h1>
<p>';

   #Mostramos información del fichero recibido
   print "El fichero recibido está $fichero_usuario <br>\n";
   print "El nombre del fichero recibido es $fichero_usuario_name <br>\n";
   print "El tamaño del fichero recibido es $fichero_usuario_size <br>\n";
   print "El tipo MIME del fichero recibido es $fichero_usuario_type <br>\n";
   

   #mostramos el contenido
   print "El contenido del fichero recibido es: <br>\n";

   #Abrimos el fichero remoto
   $archivo = fopen("$fichero_usuario", "r");
   if (!$archivo) {
     echo "<p>No se pudo abrir el archivo remoto.\n";
     exit;
   }

   #Mostramos el fichero línea a línea
   $i=0;
   while (!feof($archivo)) 
   {
     $linea = fgets($archivo, 1024);
     print "LINEA $i: $linea <BR>";
     $i++;
   }

   #Cerramos el fichero 
   fclose($archivo);

echo'
</body>
</html>';