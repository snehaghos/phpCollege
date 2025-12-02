<?php
$st = [
    "A" => 78,
    "B" => 92,
    "C" => 65,
    "D" => 88,
    "E" => 70
];

$valAsc = $st;
asort($valAsc);

$valDesc = $st;
arsort($valDesc);

$keyAsc = $st;
ksort($keyAsc);

$keyDesc = $st;
krsort($keyDesc);

echo "Value Asc: ";
print_r($valAsc);

echo "Value Desc: ";
print_r($valDesc);

echo "Key Asc: ";
print_r($keyAsc);

echo "Key Desc: ";
print_r($keyDesc);
?>
