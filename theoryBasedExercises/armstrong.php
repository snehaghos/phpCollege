<?php
$n = 153;
$temp = $n;
$sum = 0;

while($temp > 0) {
    $r = $temp % 10;
    $sum = $sum + ($r * $r * $r);
    $temp = (int)($temp / 10);
}

if($sum == $n)
    echo "$n is an Armstrong Number\n";
else
    echo "$n is not an Armstrong Number\n";
?>