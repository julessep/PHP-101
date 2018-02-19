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

  public function getIngredients()
  {
    return $this->ingredients;
  }
  public function displayRecipe()
  {
    return $this->title . " by " . $this->source;
  }
}

