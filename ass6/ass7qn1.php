<?php
$a = [5, 1, 9, 3, 7];
$asc = $a;
sort($asc);
$desc = $a;
rsort($desc);
echo "Ascending: ";
print_r($asc);
echo "Descending: ";
print_r($desc);
?>
