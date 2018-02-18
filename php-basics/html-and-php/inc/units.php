<?php
// numbers in pounds we want to converto to kilograms
$pounds = 140;
// floating point value for lb to kg conversion
$lb_to_kg = 0.453592;
// use variables from above to calculate
$kilograms = $pounds * $lb_to_kg;
// display results
echo "<p>Weight: ";
echo $pounds;
echo " 1lb = ";
echo $kilograms;
echo " kg</p>";
?>