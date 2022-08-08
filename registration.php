<?php require_once("parts/header.php"); ?>
<?php
//get new user's details
if (isset($_POST['register_form'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_verify = $_POST['password_verify'];
    $username = $_POST['username'];
    //add new user to database
    if ($password == $password_verify){
        $sql = "INSERT INTO `user` (`mail`, `username`, `password`, `activationKey`, `isActive`) VALUES ('$email', '$username', '$password',(rand()*10000), 0)";
        if ($conn->query ($sql)) {
            $sql = "SELECT * FROM `user` WHERE `user`.`username`= '$username'";
            $the_new_user = $conn->query ($sql)->fetch_assoc();
            $activation_key = $the_new_user['activationKey'];
            ?>
            <!-- send verification email -->
            <div class="container col-3 alert alert-warning text-center" role="alert">
                היי <?=$username?>,
               פרטיך נקלטתו בהצלחה, שלחנו לך מייל אימות לסיום תהליך ההרשמה 
                <br>
                המייל שישלח: לאימות הרשמה אנא היכנס לקישור הבא
                <a href="<?php echo "activate.php?user=$username&key=$activation_key";?>">אימות מייל</a>
            </div>
        <?php
         } else {
             echo $conn->error;
         }
    }
    else { ?>
        <div class="container col-3 alert alert-danger" role="alert">
        אימות סיסמא לא תקין
      </div>
      <?php
    }
} ?>

<main class="text-center">
    <section class="container mt-md-5 mt-5 mb-md-5 mb-5 pt-md-3 pt-3 pb-md-3 pb-3">
        <div class="row justify-content-md-center py-3">
            <header class="col-md-auto">
                <h1>הרשמה</h1>
            </header>
        </div>
        <!-- registration form -->
        <form method="POST">
            <div class="row justify-content-md-center py-3">
                <div class="col-md-auto text-start">
                    <label for="inputEmail" class="form-label">כתובת אימייל</label>
                    <input name='email' type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">הקפד/י לרשום אימייל תקין</div>
                </div>
            </div>
            <div class="row justify-content-md-center py-3">
                <div class="col-md-auto text-start">
                    <label for="inputPassword" class="form-label">סיסמא</label>
                    <input name='password' type="password" class="form-control" id="password">
                </div>
            </div>
            <div class="row justify-content-md-center py-3">
                <div class="col-md-auto text-start">
                    <label for="inputPassword2" class="form-label">אימות סיסמא</label>
                    <input name='password_verify' type="password" class="form-control" id="password_verify">
                    <div id="passwordHelp" class="form-text">נא לרשום את הסיסמא שוב</div>
                </div>
            </div>
            <div class="row justify-content-md-center py-3">
                <div class="col-md-auto text-start">
                    <label for="user" class="form-label">שם משתמש</label>
                    <input name='username' type="text" class="form-control" id="username">
                </div>
            </div>
            <button name='register_form' class="btn btn-primary" type="submit">הרשמה</button>
        </form>
        <div class="row justify-content-md-center pt-1">
            <a href="login.php" class="p-4">התחברות למשתמש קיים</a>
        </div>
    </section>
</main>
<?php require_once("parts/footer.php");?>