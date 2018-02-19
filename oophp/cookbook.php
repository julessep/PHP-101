<?php
include "classes/recipes.php";
include "classes/render.php";
// object
$recipe1 = new Recipe();

// object operator
$recipe1->setSource = "Grandma";
$recipe1->setTitle("my first recipe");
$recipe1->addIngredient("eggs", 3);
$recipe1->addIngredient("flour", 2, "cup");
// object
$recipe2 = new Recipe();
// object operator
// $recipe2->setSource = "Jules";
$recipe2->setTitle("My second recipe");

// echo $recipe1->getTitle();
// foreach ($recipe1->getIngredients() as $ing) {
//   echo "\n" . $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
// }

$recipe1->addInstruction("This is my first instruction");
$recipe1->addInstruction("This is my second instruction");

// echo implode("\n", $recipe1->getInstructions());

$recipe1->addTag("Breakfast");
$recipe1->addTag("Main Course");

// echo implode(", ", $recipe1->getTags());
$recipe1->setYield("6 servings");
// echo $recipe1->getYield();
// echo $recipe1->getSource();

echo Render::displayRecipe($recipe1);

// var_dump($recipe1);
