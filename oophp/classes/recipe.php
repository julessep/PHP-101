<?php

class Recipe
{
  // properties
  private $title;
  public $ingredients = array();
  public $instructions = array();
  public $yeild;
  public $tag = array();
  public $source = 'Jules Sepulveda';

  private $measurements = array(
    "tsp",
    "tbsp",
    "cup",
    "oz",
    "lb",
    "fl oz",
    "pint",
    "quart",
    "gallon"
  );
  // setter
  public function setTitle($title)
  {
    $this->title = ucwords($title);
  }
  // getter
  public function getTitle()
  {
    return $this->title;
  }

  public function addIngredient($item, $amount = null, $measure = null)
  {
    if ($amount != null && !is_float($amount) && !is_int($amount)) {
      exit("The amount must be a float: " . gettype($amount) . " $amount given");
    }
    if ($measure != null && !in_array(strtolower($measure), $this->measurements)) {
      exit("Please enter a valid measurement: " . implode(", ", $this->measurements));
    }
    $this->ingredients[] = array(
      "item" => ucwords($item),
      "amount" => $amount,
      "measure" => strtolower($measure)
    );
  }

  public function displayRecipe()
  {
    return $this->title . " by " . $this->source;
  }
}

// object
$recipe1 = new Recipe();

// object operator
$recipe1->source = "Grandma";
$recipe1->setTitle("my first recipe");
$recipe1->addIngredient("egg", 3);
// object
$recipe2 = new Recipe();
// object operator
$recipe2->source = "Jules";
$recipe2->setTitle("My second recipe");

echo $recipe1->getTitle();
echo $recipe1->displayRecipe();
echo $recipe2->displayRecipe();
// var_dump($recipe1);
