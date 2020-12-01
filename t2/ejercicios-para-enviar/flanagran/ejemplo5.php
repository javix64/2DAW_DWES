<?php
setcookie("TestCookie","Test Value");
setcookie("TestCookie",$value,time()+3600);  /* expira en 1 hora */
setcookie("TestCookie",$value,time()+3600,"/~rasmus/",".utoronto.ca",1);

//ver el contenido de una cookie
print $TestCookie; 
print $HTTP_COOKIE_VARS["TestCookie"];

// utilizar vectores para ver cookie
setcookie( "cookie[three]", "cookiethree" );
setcookie( "cookie[two]", "cookietwo" );
setcookie( "cookie[one]", "cookieone" );
if ( isset( $cookie ) ) {
    while( list( $name, $value ) = each( $cookie ) ) {
        echo "$name == $value\n";
    }
}

