<?php
require_once "../db.php";
$rec_id = $_GET['recipe_id'];
$name = $_POST['ing'];

$sql = "INSERT INTO `ingredient` (`ingredientID`, `ingredientName`, `recpieID`) VALUES (NULL, '$name', '$rec_id')";
if ($conn->query($sql)){
    header("Location: ../edit.php?recipe_id=$rec_id");
}
else {
    echo $conn->error;
}

