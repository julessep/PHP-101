<?php 
$learn = ['Learn Conditionals', 'Learn Arrays', 'Learn Loops'];
$learn[] = 'Build something awesome!';
array_push($learn, 'Functions', 'Forms', 'Objects');
// array_unshift($learn, 'Functions', 'Forms', 'Objects');
$removed = array_shift($learn);
echo 'you removed ' . array_shift($learn);
unset($learn[1],$learn[2]);
$learn = array_values($learn);
$learn[1] = 'Learn Painting';
$learn[4] = 'Learn Skiing';
// var_dump($learn);
// echo $learn[1];
// echo implode("/n", $learn);
?>