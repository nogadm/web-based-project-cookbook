<?php require_once "parts/header.php"; ?>
<?php
    $user_name = $_GET['name'];
    if (isset($_POST['password_form'])) {
        $user_password = $_POST['password'];
        //change user's password in the data base
        $sql = "UPDATE `user` SET `password` = '$user_password' WHERE `user`.`username` = '$user_name'";
       if ($conn->query ($sql)) {
        ?>
        <div class="container col-3 alert alert-success text-center" role="alert">
           הסיסמה הוחלפה
        </div>
        <?php
        } 
    } 
    ?>
<main class="container mt-md-5 mt-5 mb-md-5 mb-5 pt-md-3 pt-3 pb-md-3 pb-3"> 
     <form method="post">
        <div class="mb-5">
            <div class="input-group mb-3">
                <!-- user enters new password -->
                <span class="input-group-text" id="basic-addon2">הכנס סיסמא חדשה</span>
                <input type="password" placeholder="סיסמא חדשה" name="password" id="password"class="form-control">
            </div>
            <div class="d-grid gap-2 col-4 mx-auto">
                <input type="submit" name="password_form" value="החלף סיסמא" class="btn btn-outline-primary forum-control"/>
            </div>
        </div>   
    </form>
</main>
<?php require_once("parts/footer.php");?>