<?php
require_once "../db.php";
$ing_id = $_GET['ingredient_id'];
$rec_id = $_GET['recipe_id'];
$sql = "DELETE FROM ingredient WHERE `ingredient`.`ingredientID` = $ing_id AND `ingredient`.`recpieID` = $rec_id";
if ($conn->query($sql)) {
    header("Location: ../edit.php?recipe_id=$rec_id");
    die();
} else {
    echo $conn->error;
}


