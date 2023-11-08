<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

$number = trim(fgets(STDIN));// 4 6

list($num, $k) = explode(" ", $number);

$numbers = trim(fgets(STDIN)); //3 5 6 9
$numberList = explode(" ", $numbers); // arr

$du = []; //

foreach ($numberList as $value) {
    if ($value < $k && !in_array($value, $du)) {
        array_push($du, $value);//3
    } else if (!in_array($value % $k, $du)) {
        array_push($du, $value % $k);
    }
}

echo count($du);
?>