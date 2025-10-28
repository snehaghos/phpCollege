<?php
function getClientIp() {
    $ipAddress = '';
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ipAddress = $_SERVER['HTTP_CLIENT_IP'];
        echo "Client IP from HTTP_CLIENT_IP found. ";
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipAddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        echo "Client IP from HTTP_X_FORWARDED_FOR found. ";
    } else {
        $ipAddress = $_SERVER['REMOTE_ADDR'];
        echo "Client IP from REMOTE_ADDR found. ";
    }
    return $ipAddress;
}

$clientIp = getClientIp();
echo "Client IP Address: " . $clientIp;
?>