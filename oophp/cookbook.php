<?php
include "classes/recipes.php";
// object
$recipe1 = new Recipe();

// object operator
$recipe1->source = "Grandma";
$recipe1->setTitle("my first recipe");
$recipe1->addIngredient("eggs", 3);
$recipe1->addIngredient("flour", 2, "cup");
// object
$recipe2 = new Recipe();
// object operator
$recipe2->source = "Jules";
$recipe2->setTitle("My second recipe");

echo $recipe1->getTitle();
foreach ($recipe1->getIngredients() as $ing) {
  echo "\n" . $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
}
// var_dump($recipe1);
