<?php require_once("parts/header.php");
$user_name = $_GET['user'];
$activation_key = $_GET['key'];
$sql = "SELECT * FROM `user` WHERE `user`.`username`= '$user_name'";
$the_new_user = $conn->query ($sql)->fetch_assoc();
//change isActive value of user to true
if ($activation_key == $the_new_user['activationKey']){
    $sql = "UPDATE `user` SET `isActive` = '1' WHERE `user`.`username` = '$user_name'";
    if ($conn->query ($sql)) {
        ?>
        <div class="container col-3 alert alert-success text-center" role="alert">
            היי <?=$user_name?>,
           אימות המייל נקלט במערכת
           <br>
           <a href="login.php">חזרה לאתר</a>
        </div>
        <?php
    }
}
require_once("parts/footer.php");?>