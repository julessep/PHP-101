<?php

function hello(){
  echo 'Hello, World!';
}

$current_user = 'Jules';

function is_jules(){
  global $current_user;
  if($current_user == 'Jules'){
    echo 'It is Jules!';
  } else {
    echo 'Nope, it is not ' . $current_user;
  }
}

is_jules();

function hey($name){
  echo 'Hey, ' . $name . '!';
}

hey('Juliet');

function hi($arr){
  if(is_array($arr)){
    foreach($arr as $names){
      echo 'Hi, $name!</br>';
    }
    } else {
      echo 'Hi, all!';
  }
}

$names = array(
  'jules', 'jess'
);

hi($names);

// you can ser default argument to null and it won't throw errors
function get_info($name, $title = Null){
  if($title){
    echo "$name has arrived, they are with us as a $title.";
  } else {
    echo "$name has arrived, welcome!";
  }
}
get_info('Nathan', 'guest');

function add_up(){
  $arr = array(
    $a,
    $b,
    $a + $b
  );
  return $arr;
}

$value = add_up(2,5);
echo $value[2];