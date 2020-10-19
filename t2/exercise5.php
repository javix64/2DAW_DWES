<?php
    /*Función que nos devuelve la fecha de hoy en castellano */
    function fechaHoy(){
        $hoy = date("d M Y");
        return $hoy;
    }
    echo "La fecha en castellano es: ".fechaHoy();
    //tengo dudas