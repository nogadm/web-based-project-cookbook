<?php
require_once "../db.php";
$rec_id = $_GET['recipe_id'];
$sql = "DELETE FROM recpie WHERE `recpie`.`recpieID` = $rec_id";
if ($conn->query($sql)) {
    header("Location: ../recipes.php");
    die();
} else {
    echo $conn->error;
}


