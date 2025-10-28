<?php 
$speed=45; 
if($speed<=60) 
{ 
 echo "It's Safe Driving Speed."; 
} 
elseif($speed>60 && $speed<100) 
{ 
 echo "You are Burning Extra Fuel."; 
} 
else 
{ 
 echo "It's Dangerous."; 
} 
?>
