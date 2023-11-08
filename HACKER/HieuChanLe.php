<?php
    $_fp = fopen("php://stdin", "r");

    $number = (int) readline('');

    $arr = intval(fgets(STDIN));

    $arr = explode(" ",$arr);

    $sumEven = 0;
    $sumOdd = 0;

    for($i = 0; $i < $number ; $i++){
           
        if($i % 2 === 0){
            $sumEven += $arr[$i];
        }else{
            $sumOdd += $arr[$i];
        }
    }

    echo  $sumOdd - $sumEven;
?>