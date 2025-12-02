<?php
$a = array("Apple", "Banana", "Mango", "Orange");

echo "First Element: " . $a[0] . "<br>";
echo "Second Element: " . $a[1] . "<br>";

$len = count($a);
echo "Length: $len<br>";

for($i = 0; $i < $len; $i++){
    echo $a[$i] . "<br>";
}
?>
