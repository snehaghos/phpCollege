<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($userAgent, 'Firefox') !== false) {
    echo "You are using Firefox.";
} elseif (strpos($userAgent, 'Chrome') !== false) {
    echo "You are using Google Chrome.";
} elseif (strpos($userAgent, 'MSIE') !== false || strpos($userAgent, 'Trident') !== false) {
    echo "You are using Internet Explorer.";
} else {
    echo "Unknown browser.";
}
?>