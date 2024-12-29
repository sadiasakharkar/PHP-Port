<?php
$cookiename = "username";
if(isset($_COOKIE[$cookiename])){
    $cookievalue = $_COOKIE[$cookiename];
    echo "Value of cookie is : $cookievalue ";
}else{
    echo "Cookie is not set";
}
?>