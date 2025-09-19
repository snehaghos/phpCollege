<?php
    date_default_timezone_set("Asia/Kolkata");
    echo "Today is : ".date("y/m/d")."<br>";
    echo "Today is : ".date("1")."<br>";
    echo "The time is : ".date("h:i:sa")."<br>";
    echo "<br>";
    date_default_timezone_set("America/New_york");
    echo "Today is(America Time Zone)".date("y/m/d")."<br>";
    echo "Today is(America Time Zone)".date("1")."<br>";
    echo "The Time is(America Time Zone)".date("h:i:sa")."<br>";
?>