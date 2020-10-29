<?php
/*
Escribe un formulario básico de login que pida el usuario y la contraseña. 

El script sólo nos mostrará el usuario y la contraseña enviados por el método POST
*/
if($_SERVER["REQUEST_METHOD"]=="POST"){
    //$_SERVER["REQUEST_METHOD"]=="POST"
    //nos sirve para controlar el tipo de request que haces
    //en este caso es un post
    $user = $_POST['usuario'];
    $pass = $_POST['password'];
}
echo "Tu usuario es $user y tu password es $pass";