<?php
$an = ["Lion", "Tiger", "Cat", "Dog", "Zebra", "Horse", "Deer", "Bear", "Goat", "Wolf"];

$asc = $an;
sort($asc);

$rev = $an;
rsort($rev);

echo "Sorted: ";
print_r($asc);

echo "Reverse: ";
print_r($rev);
?>
