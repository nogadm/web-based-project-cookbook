<?php
$servername = "localhost";
$username="root";
$password = ""; 
$conn = new mysqli($servername,$username,$password);
if ($conn->connect_error) {
    echo "<h2>error connecting to db</h2>";
    die();
}
$dbName = "project";

if (!$conn->select_db($dbName)){
    echo "<p>creating new database</p>";
    $sql = "CREATE DATABASE $dbName";
    if ($conn->query($sql)){
        $conn->select_db($dbName);
       echo "<p>database $dbName created</p>";
    };
}