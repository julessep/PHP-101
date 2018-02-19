<?php

class Recipe
{
  // properties
  public $title;
  public $ingredients = array();
  public $instructions = array();
  public $yeild;
  public $tag = array();
  public $source = 'Jules Sepulveda';

  public function displayRecipe()
  {
    return $this->title . " by " . $this->source;
  }
}

// object
$recipe1 = new Recipe();
echo $recipe1->source;
// object operator
$recipe1->source = "Grandma";
echo $recipe1->source;

$recipe2 = new Recipe();
$recipe2->source = "Betty Crocker";
echo $recipe1->source;
echo $recipe2->source;

var_dump($recipe1);
