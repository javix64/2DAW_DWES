<?php
/*
Modifica el ejercicio anterior para que el formulario HTML y el bloque PHP que lo procesa se integren en un solo fichero.

Ahora hay que distinguir entre dos casos: cuando se accede al formulario para rellenarlo y cuando se envía para procesarlo.

Cuando se accede a la página usando el método GET, es decir , introduciendo la dirección en el navegador, al seguir un vínculo como resultado de una redirección con un header(Location:), se muestra el formulario. En cambio, si se accede mediante POST quiere decir que el cliente está enviando el formulario. 

Se puede diferenciar entre los dos métodos de acceso consultando $_SERVER["REQUEST_METHOD"].

Cuando un formulario llama al mismo fichero se recomienda usar:

action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"];?>

en lugar del nombre del fichero. 

*/

if($_SERVER["REQUEST_METHOD"]=="POST"){
    //$_SERVER["REQUEST_METHOD"]=="POST"
    //nos sirve para controlar el tipo de request que haces
    //en este caso es un post
    
    $user = $_POST['usuario1'];
    $pass = $_POST['password1'];
    if ($user=="usuario" && $pass=="1234"){
        header("Location: welcome.html");
    }else{
        header("Location: error.html");
    }
}