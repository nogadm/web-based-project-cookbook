<?php
require_once "../db.php";
$instruction_id = $_GET['instruction_id'];
$rec_id = $_GET['recipe_id'];
$sql = "DELETE FROM instruction WHERE `instruction`.`instruction` = $instruction_id AND `instruction`.`recpieID` = $rec_id";
if ($conn->query($sql)) {
    header("Location: ../edit.php?recipe_id=$rec_id");
    die();
} else {
    echo $conn->error;
}


