<?php
$bd = ["Sparrow", "Peacock", "Crow", "Parrot", "Pigeon", "Owl", "Eagle", "Duck", "Swan", "Vulture"];

$asc = $bd;
sort($asc);

$rev = $bd;
rsort($rev);

echo "Sorted: ";
print_r($asc);

echo "Reverse: ";
print_r($rev);
?>
