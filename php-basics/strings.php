<?php
$name = 'Jules';
$string_one = "Learning to display \"Hello $name!\" to the screen.\n";
$string_one = 'Learning to display "Hello ';
$string_one .= $name . '!" to the screen.';
$string_one =  $string_one . "\n";
//prepend to a string
$string_one = 'I am ' . $string_one;
echo $string_one;
?>