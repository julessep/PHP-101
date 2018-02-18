<?php
$name = 'Jules';
$string_one = "Learning to display \"Hello $name!\" to the screen.\n";
$string_one = 'Learning to display "Hello ';
$string_one .= $name . '!" to the screen.';
//$string_one =  $string_one . "\n";
//prepend to a string
//$string_one = 'I am ' . $string_one;
echo $string_one;

// $isReady = true;
// var_dump($isReady);
// $isReady = false;
// var_dump($isReady);

// var_dump(1+"2");

$a = 10;
$b = "10";
// var_dump($a == $b);
// var_dump($a === $b);
$string_one = "";
if ($string_one == 'Learning to display "Hello Alena!" to the screen.'){
 echo 'the values match';  
} elseif ($string_one == "") {
    echo '$string_one is empty';
} else {
 echo 'the values DO NOT match';   
}
var_dump($string_one);
?>