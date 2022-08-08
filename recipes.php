<?php require_once("parts/header.php"); ?>   
<?php
//if user is not logged in, go to login page
if (!isset($_SESSION["user_email"])): 
header('Location: login.php');
exit;
endif;?>
<main class="container text-center mt-md-5 mt-5 mb-md-5 mb-5 pt-md-3 pt-3 pb-md-3 pb-3"> 
  <form method="POST">
    <div class="mb-md-3 mb-3">
      <p class="fw-bold fs-3">המתכונים שלי</p>
      <!-- user can sort recpies by name or date -->
      <button type="submit" name="a_z" class="btn btn-outline-secondary btn-sm">מיין לפי א'-ת'</button>
      <button type="submit" name="z_a" class="btn btn-outline-secondary btn-sm">מיין לפי ת'-א'</button>
      <button type="submit" name="new_old" class="btn btn-outline-secondary btn-sm">מיין לפי תאריך עולה</button>
      <button type="submit" name="old_new" class="btn btn-outline-secondary btn-sm">מיין לפי תאריך יורד</button>         
    </div>  
    <div class="input-group col-4 mb-md-5 mb-5">
      <input type="text" placeholder="חפש מתכון לפי שם" name="recipe_name" id="find_by_name" class="form-control">
      <button type="submit" name="find_by_name" class="btn btn-primary btn-sm">מצא</button>
    </div> 
  </form>

  <!-- recpie table -->
  <table id="recpie_table" class="table table-hover table-striped table-light text-center">
      <tr>
        <th scope="col">שם מתכון </th>
        <th scope="col">פורסם ע"י</th>
        <th scope="col">תאריך פרסום</th>
        <th scope="col">(קישור למתכון)</th>
      </tr>
      <tbody>
          <?php
         //search recipe by name
          if(isset($_POST['find_by_name'])) {
            $name = $_POST['recipe_name'];
            $sql = "SELECT * FROM `recpie` WHERE `recpie`.`name` = '$name'";
            //no recipe with input name in the database
            if (!($conn->query ($sql))){
              ?>
              <div class="container col-3 alert alert-danger text-center" role="alert">
                אין מתכון בשם זה
              </div>
              <?php 
            }
          }
            //display recipes by user's choice of sorting
          else {
            if(isset($_POST['a_z'])) 
              $sql = "SELECT * FROM `recpie` ORDER BY `name` ASC";
            else 
              if(isset($_POST['z_a'])) 
                $sql = "SELECT * FROM `recpie` ORDER BY `name` DESC";
              else
                if(isset($_POST['new_old'])) 
                  $sql = "SELECT * FROM `recpie` ORDER BY `date` ASC";
                else 
                  if(isset($_POST['old_new'])) 
                    $sql = "SELECT * FROM `recpie` ORDER BY `date` DESC";
                    else
                    $sql = "SELECT * FROM `recpie`";
          }
          $result = $conn->query ($sql);
          ?>
          <?php while ($recpie = $result->fetch_assoc()):?>
            <tr data-id="<?=$recpie['recpieID']?>">
                <td><?=$recpie['name']?></td>
                <td><?=$recpie['userWrote']?>@</td>
                <td><?=$recpie['date']?></td>
                <td><a href="recipe1.php?recipe_id=<?=$recpie['recpieID']?>">
                <img src="<?=$recpie['picLink']?>" class="img-fluid img-thumbnail" style="width: 10em"></td>
            </tr>
            <?php endwhile;?>
        </tbody>
  </table> 
</main>
<?php require_once("parts/footer.php");?>