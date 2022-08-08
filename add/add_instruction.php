<?php
require_once "../db.php";
$rec_id = $_GET['recipe_id'];
$instructionID = $_POST['instructionID'];
$instructionText = $_POST['instructionText'];

$sql = "INSERT INTO `instruction` (`instruction`, `instructionText`, `recpieID`) VALUES ('$instructionID', '$instructionText', '$rec_id')";
if ($conn->query($sql)){
    header("Location: ../edit.php?recipe_id=$rec_id");
}
else {
    echo $conn->error;
}

