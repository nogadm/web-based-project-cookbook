<?php require_once("parts/header.php");?>
<?php
//logged in user will be directly transferred to index page
if (isset($_COOKIE["user_email"])){
  $_SESSION["user_email"]=$_COOKIE["user_email"];
  $try_mail = $_COOKIE["user_email"];
  $sql = "SELECT * FROM `user` WHERE `user`.`mail`= '$try_mail'";
  $users = $conn->query ($sql)->fetch_assoc();
  $user_name = $users['username'];
  header("Location: index.php?user_name=$user_name");
  exit;
} ?>
<?php
  if(isset($_POST['login_form'])) { 
    $try_mail = $_POST['user_email'];
    $sql = "SELECT * FROM `user` WHERE `user`.`mail`= '$try_mail'";
    $users = $conn->query ($sql)->fetch_assoc();
    if (!empty($users))  {
      if ($users['password'] == $_POST['password']) {
        //if user checked 'remember me' box, create cookie for 7 days
        if ($_POST['remember_me']=="1") {
          setcookie("user_email",$_POST['user_email'], time()+60*60*24*7); 
        } 
        $_SESSION['user_email']=$_POST['user_email'];
        $user_name = $users['username'];
        header("Location: index.php?user_name=$user_name");
        exit;
      }
      //alert errors in login process
      else { ?>
      <div class="container col-3 alert alert-danger text-center" role="alert">
        סיסמה שגויה
      </div>
      <?php
      }
    } else { ?>
      <div class="container col-3 alert alert-warning text-center" role="alert">
        אימייל לא קיים במערכת
      </div>
    <?php
    }
  }
?>
<main class="container text-center mt-md-5 mt-5 mb-md-5 mb-5 pt-md-3 pt-3 pb-md-3 pb-3">

    <form method="POST">
        <section class="m-5 p-5">
            <div class="row justify-content-md-center py-3">
                <header class="col-md-auto">
                    <h1>התחברות</h1>
                </header>
            </div>
            <!-- login form -->
            <form action="" class="">
                <div class="row justify-content-md-center py-3">
                    <div class="col-md-auto text-start">
                        <label for="inputEmail" class="form-label">כתובת אימייל</label>
                        <input name='user_email' type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">הקפד/י לרשום אימייל תקין</div>
                    </div>
                </div>
                <div class="row justify-content-md-center py-3">
                    <div class="col-md-auto text-start">
                        <label for="inputPassword" class="form-label">סיסמא</label>
                        <input name='password' type="password" class="form-control" id="inputPassword">
                    </div>
                </div>
                <div class="row justify-content-md-center py-3">
                    <div class="col-md-auto">
                        <label>   
                            <input type="checkbox" value="1" name="remember_me"> זכור אותי
                        </label>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                        <button name='login_form' class="btn btn-primary" type="submit">התחברות</button>
                    </div>
                </div>
            </form>
            <div class="row justify-content-md-center pt-3">
                <div class="col-12 col-md-auto">
                    <a href="registration.php" class="p-4">משתמש חדש? הירשם עכשיו!</a>
                    <span >  |  </span>
                </div>
                <div class="col-12 col-md-auto">
                    <a href="forgot.php" class="p-3">איפוס סיסמא</a>
                </div>
            </div>
        </section>
    </form>

</main>
<?php require_once("parts/footer.php");?>