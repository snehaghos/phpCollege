<?php
date_default_timezone_set("Asia/Kolkata");
echo " Time is ".date("H:i:sa")."<br>";
$t=date("H");

if($t > "5" && $t < "12"){
echo "Have a Good Morning!";
}
elseif ($t >= "12" && $t < "17"){
echo "Have a Good Ray!"; }
elseif ($t >= "17" && $t < "21"){
echo "Have a Good Evening!";
}else{
echo "Have a Good Night!";
}
?>