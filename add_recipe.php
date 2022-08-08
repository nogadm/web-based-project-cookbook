<?php require_once "parts/header.php"; ?>
<?php
//if user is not logged in, go to login page
if (!isset($_SESSION["user_email"])): 
header('Location: login.php');
exit;
endif;?>
<?php
    $try_mail = $_SESSION["user_email"];
    $sql = "SELECT * FROM `user` WHERE `user`.`mail`= '$try_mail'";
    $users = $conn->query ($sql)->fetch_assoc();
    $user_name = $users['username'];

    if (isset($_POST['update_recpie'])) {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $pic = $_POST['pic'];
        $sql = "INSERT INTO `recpie` (`recpieID`, `name`, `date`, `description`, `userWrote`, `picLink`) VALUES (NULL, '$name', NOW(), '$description', '$user_name', '$pic')";
       if ($conn->query ($sql)) {
            $sql = "SELECT * FROM `recpie` WHERE `recpie`.`name`= '$name'";
            $new_recipe = $conn->query ($sql)->fetch_assoc();
           $id = $new_recipe['recpieID'];
           header("Location: edit.php?recipe_id=$id");
        } else {
            echo $conn->error;
        }
    } 
    ?>
<main class="container mt-md-5 mt-5 mb-md-5 mb-5 pt-md-3 pt-3 pb-md-3 pb-3"> 
    <div class="mb-5">
        <p class="fw-bold fs-3">פרסום מתכון חדש</p>
    </div>
     <!-- edit recipe name and description -->
     <form method="post">
        <div class="mb-5">
            <p class="fw-bold fs-5">פרטים כלליים:</p>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">שם המתכון</span>
                <input type="text" placeholder="שם מתכון" name="name" id="name"class="form-control">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">תיאור המתכון</span>
                <textarea type="text" placeholder="תיאור מתכון" name="description" id="description" class="form-control" aria-label="With textarea"></textarea>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">קישור לתמונת המתכון</span>
                <input type="text" placeholder="קישור מתכון" name="pic" id="pic"class="form-control">
            </div>
            <div class="d-grid gap-2 col-4 mx-auto">
                <input type="submit" name="update_recpie" value="להוספת מרכיבים ואופן ההכנה" class="btn btn-outline-primary forum-control"/>
            </div>
        </div>   
    </form>
            
</main>
<?php require_once("parts/footer.php");?>