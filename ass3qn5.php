<?php 
$marks = 85; 
switch (true) { 
 case ($marks > 90): 
          echo "Excellent"; 
          break; 
     case ($marks >= 60): 
          echo "First Division"; 
          break; 
     case ($marks >= 45): 
          echo "Second Division"; 
          break; 
     case ($marks >= 40): 
          echo "Passed without First Division and Second Division"; 
          break; 
     case ($marks <=39 && $marks >= 0): 
          echo "Fail"; 
          break; 
     default: 
echo "Not Eligible for Test/Examination"; 
          break; 
} 
?>
