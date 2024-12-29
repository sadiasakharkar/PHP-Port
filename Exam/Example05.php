<!-- prime -->

<?php
function isPrime($n){
    for ($x = 2 ; $x < $n ; $x ++){
        if($n % $x == 0){
            return 0;
        }
    }
    return 1;
}

$a = isprime(13);
if ($a == 0){
    echo "$n is not a prime number";
} else{
    echo "$n is a prime number";
}
?>