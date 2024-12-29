<?php
$n = 5; 
$count = 1;
echo "$n:".$n ; 
for ($i = $n ; $i >0 ; $i--){
    for ($j = $i ; $j < $n +1 ; $j++ ){
        echo "4s" . $count;
        $count++;
    }
    echo "\n";
}
?>