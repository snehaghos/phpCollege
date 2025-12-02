<?php
$x = array("Red", "Green", "Blue", "Yellow");

echo $x[0] . "<br>";
echo $x[1] . "<br>";

$l = count($x);
echo "Length: $l<br>";

for($i = 0; $i < $l; $i++){
    echo $x[$i] . "<br>";
}
?>
