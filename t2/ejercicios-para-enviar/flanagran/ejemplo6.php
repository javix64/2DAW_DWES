<?php
//////////////////////////////////////////////
//          ejemplo de escritura            //
//////////////////////////////////////////////

//Abrimos el fichero en modo de escritura 
$DescriptorFichero = fopen("fichero_prueba.txt","w"); 

//Escribimos una línea 
$string1 = "Esta es la primera línea de texto\r\n"; 
fputs($DescriptorFichero,$string1); 

//Escribimos otra
$string2 = "Y esta es la segunda\r\n"; 
fputs($DescriptorFichero,$string2); 

//Cerramos el fichero 
fclose($DescriptorFichero);


//////////////////////////////////////////////
//           ejemplo de lectura             //
//////////////////////////////////////////////


//Abrimos el fichero en modo lectura 
$DescriptorFichero = fopen("fichero_prueba.txt","r"); 

//Repetimos hasta que no lleguemos al final del fichero 
while(!feof($DescriptorFichero)){ 
    //Leemos una línea de como max 4096 caracteres (4KB), que será menos si hay un retorno de carro
    $buffer = fgets($DescriptorFichero,4096); 

    //Escribimos la línea 
    echo $buffer."<BR>"; 
}


//////////////////////////////////////////////
//         leer un fichero remoto           //
//////////////////////////////////////////////


#Abrimos el fichero remoto
$archivo = fopen("http://www.php.net/", "r");
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


//////////////////////////////////////////////
//   escribir un fichero remoto con ftp     //
//////////////////////////////////////////////


$file = fopen("ftp://ftp.php.net/incoming/outputfile", "w");
if (!$file) {
    echo "<p>Unable to open remote file for writing.\n";
    exit;
}

/* Escribimos el fichero. */
fputs($file, "$HTTP_USER_AGENT\n");

/*Lo cerramos*/
fclose($file);