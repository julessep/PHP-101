<?php 
$currentYear = date('Y');
$year = $currentYear - 100;

while ($year <= $currentYear) {
  echo $year . "<br />\n";
  $year++;
}
do {
  echo $year . "<br />\n";
} while (++$year <= $currentYear);
$learn = ['Learn Conditionals', 'Learn Arrays', 'Learn Loops'];
$learn[] = 'Build something awesome!';
array_push($learn, 'Functions', 'Forms', 'Objects');
array_unshift($learn, 'Functions', 'Forms', 'Objects');
asort($learn);
sort($learn);

for ($i = 0; $i < count($learn); $i++) {
  echo $learn[$i] . "\n";
}

$count=0;
/*while ((list($key, $val) = each($learn)) && (++$count <= 2)) {
    echo "$key => $val\n";
}*/

?>