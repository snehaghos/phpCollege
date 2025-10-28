<?php
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $protocol = "HTTPS";
} else {
    $protocol = "HTTP";
}
echo "The page is accessed via: " . $protocol;
?>