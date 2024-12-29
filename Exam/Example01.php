<!-- Write a PHP script to set a cookie named "username" with the value
"Gulnara Serik" and an expiration time of one hour. -->

<?php
$cookiename = "username";
$cookievalue = "Gulnara Serik";

setcookie($cookiname , $cookievalue, time() + 3600, "/");
echo "Cookie named 'user' is set with value: $cookievalue";
?>
