<?php
    $_fp = fopen("php://stdin", "r");
    
    $number = (int) readline("");

    $arr =intval(fgets(STDIN));
    $arr =explode(" ",$arr);

    $sum = 0;
    foreach($arr as $num){
        if($num % 2 !== 0){
            $sum += $num;
        }
    }
    echo $sum;
?>