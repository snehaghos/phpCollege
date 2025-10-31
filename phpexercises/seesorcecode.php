<?php
$all_lines = file('https://wishalpha.com/');

foreach ($all_lines as $line_num => $line)
{
    echo "Line No.-{$line_num}: " . htmlspecialchars($line) . "\n";
}


?>