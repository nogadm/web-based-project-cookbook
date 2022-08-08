<?php require_once("parts/header.php"); ?>
<?php $id = $_GET['recipe_id']; ?>
<?php
    if (isset($_POST['update_recpie'])) {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $pic = $_POST['pic'];
        $sql = "UPDATE `recpie` SET `name` = '$name', `description` =  '$description', `picLink` =  '$pic' WHERE `recpie`.`recpieID` = $id";
       if ( $conn->query ($sql)) {
            ?>
            <div class="container col-3 alert alert-success text-center" role="alert">המתכון עודכן</div>
       <?php
        }else {
            echo $conn->error;
        }
    } 
    $sql = "SELECT * FROM `recpie` WHERE `recpie`.`recpieID` = $id";
    $recpies = $conn->query ($sql)->fetch_assoc();
    ?>

<main class="container mt-md-5 mt-5 mb-md-5 mb-5 pt-md-3 pt-3 pb-md-3 pb-3"> 
    <div class="mb-5">
        <p class="fw-bold fs-3">עריכת מתכון - <?php echo $recpies['name'] ?></p>
    </div>
            
    <!-- add ingridients -->
    <div class="mb-5">
        <p class="fw-bold fs-5">מרכיבים:</p>
        <form method="post" action="add/add_ingredient.php?recipe_id=<?=$id?>">
            <div class="input-group mb-3">
                <input type="text" placeholder="שם מרכיב" name="ing" id="ing" class="form-control">
                <input type="submit" name="update" value="הוסף" class="btn btn-primary btn-sm forum-control"/>
            </div>
        </form>

        <!-- display ingridient list and delete ingridients -->
        <table id="customer_table" class="table table-hover">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "select * from ingredient where recpieID=$id";
                $result = $conn->query ($sql);
                ?> 
                <?php while ($ingredient = $result->fetch_assoc()):?>
                <tr>
                    <td><?=$ingredient['ingredientName']?></td>
                    <td><a class="delete_ingredient" href="delete/delete_ingredient.php?ingredient_id=<?=$ingredient['ingredientID']?>&recipe_id=<?=$ingredient['recpieID']?>">מחק</a></td>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
    </div>   

    <!-- add instructions -->
    <div class="mb-5">
        <p class="fw-bold fs-5">אופן ההכנה:</p>
        <form method="post" action="add/add_instruction.php?recipe_id=<?=$id?>">
            <div class="input-group mb-3">
                <input type="text" placeholder="מספר שלב" name="instructionID" id="instructionID" class="form-control">
                <input type="text" placeholder="פעולה לביצוע" name="instructionText" id="instructionText" class="form-control">
                <input type="submit" name="update" value="הוסף" class="btn btn-primary btn-sm forum-control"/>
            </div>
        </form>
    
        <!-- display instruction list and delete instructions -->
        <table id="customer_table" class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">מס'</th>
                    <th scope="col">פעולה לביצוע</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "select * from instruction where recpieID=$id";
                $result = $conn->query ($sql);
                ?> 
                <?php while ($instruction = $result->fetch_assoc()):?>
                <tr>
                    <td><?=$instruction['instruction']?></td>
                    <td><?=$instruction['instructionText']?></td>
                    <td><a class="delete_instruction" href="delete/delete_instruction.php?instruction_id=<?=$instruction['instruction']?>&recipe_id=<?=$id?>">מחק</a></td>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
    </div>
  
    <!-- edit recipe name and description -->
    <form method="post">
        <div class="mb-5">
            <p class="fw-bold fs-5">פרטים כלליים:</p>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">שם המתכון</span>
                <input type="text" value="<?=$recpies['name'];?>" placeholder="שם מתכון" name="name" id="name"class="form-control">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">תיאור המתכון</span>
                <textarea type="text" placeholder="תיאור מתכון" name="description" id="description" class="form-control" aria-label="With textarea"><?=$recpies['description'];?></textarea>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">קישור לתמונת המתכון</span>
                <input type="text" value="<?=$recpies['picLink'];?>" placeholder="קישור מתכון" name="pic" id="pic"class="form-control">
            </div>
            <div class="d-grid gap-2 col-4 mx-auto">
                <input type="submit" name="update_recpie" value="עדכן מתכון" class="btn btn-outline-primary forum-control"/>
            </div>
        </div>   
    </form>

</main>

<?php require_once("parts/footer.php");?>