<?php

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header("WWW-Authenticate: Basic realm=\"flanagan.ugr.es\"");
    header("HTTP/1.0 401 Unauthorized");
  }
?>

<html>
<head> <title>Ejemplo 20 </title></head>
<body>
 <h1> Ejemplo de PHP </h1>

<?php

  if (!isset($_SERVER['PHP_AUTH_USER'])) {
     echo "Texto a enviar si pulsa el botón Cancelar\n";   
     exit;
  } else {
    echo "<p>Hola ".$_SERVER['PHP_AUTH_USER'].".</p>";
    echo "<p>Has introducido <b>".$_SERVER['PHP_AUTH_PW']." </b>como tu contraseña.

";
  }
?>
</body>
</html>