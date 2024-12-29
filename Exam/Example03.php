<?php
$cookiename = "username";
setcookie($cookiename , " " , time() - 3600);
echo " Cookie anmed username has been deleted";
?>