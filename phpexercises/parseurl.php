<?php
    $url="https://github.com/snehaghos";
    $parsedUrl=parse_url($url);
    echo "Scheme: " . $parsedUrl['scheme'] . "\n";
    echo "Host: " . $parsedUrl['host'] . "\n";
    echo "Path: " . $parsedUrl['path'] . "\n";

?>