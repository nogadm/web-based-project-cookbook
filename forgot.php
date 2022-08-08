<?php require_once "parts/header.php"; ?>
<?php
    //get user's email address and give link to update password
    if (isset($_POST['email_form'])) {
        $user_email = $_POST['user_email'];
        $sql = "SELECT * FROM `user` WHERE `user`.`mail` = '$user_email'";
       if ($result=$conn->query ($sql)->fetch_assoc()) {
        $name = $result['username'];
        ?>
        <!-- send email -->
        <div class="container col-3 alert alert-warning text-center" role="alert">
           שלחנו לך מייל לאיפוס סיסמא
            <br><br>
            המייל שישלח: לאיפוס סיסמא אנא היכנס לקישור הבא
            <a href="<?php echo "restore.php?user=$user_email&name=$name";?>">איפוס סיסמא</a>
        </div>
        <?php
        } else { ?>
            <div class="container col-3 alert alert-danger text-center" role="alert">
              מייל לא קיים במערכת
            </div>
            <?php
        }
    } 
    ?>
<main class="container mt-md-5 mt-5 mb-md-5 mb-5 pt-md-3 pt-3 pb-md-3 pb-3"> 
    <div class="mb-5">
        <p class="fw-bold fs-3">פרסום מתכון חדש</p>
    </div>
     <!-- user enters email for which password needs to be changed -->
     <form method="post">
        <div class="mb-5">
            <p class="fw-bold fs-5">פרטים כלליים:</p>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">הכנס מייל</span>
                <input type="email" placeholder="מייל" name="user_email" id="user_email"class="form-control">
            </div>
            <div class="d-grid gap-2 col-4 mx-auto">
                <input type="submit" name="email_form" value="שלח מייל לאיפוס סיסמא" class="btn btn-outline-primary forum-control"/>
            </div>
        </div>   
    </form>
</main>
<?php require_once("parts/footer.php");?>