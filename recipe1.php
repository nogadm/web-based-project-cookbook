<?php require_once("parts/header.php"); ?>
<?php $id = $_GET['recipe_id']; ?>
<main class="container mt-md-5 mt-5 mb-md-5 mb-5 pt-md-3 pt-3 pb-md-3 pb-3"> 
    <?php
        $sql = "select * from recpie where recpieID = $id";
        $result = $conn->query ($sql);
    ?>
    <?php while ($recpie = $result->fetch_assoc()):?>

    
    <div class="mb-md-4 mb-4">
        <!-- recpie title and description -->
        <p class="fw-bold fs-1"><?=$recpie['name']?></p>
        <p><?=$recpie['description']?></p>
        <!-- edit/delete recipe -->
        <a href="edit.php?recipe_id=<?=$id?>" class="btn btn-secondary btn-sm">עריכת מתכון</a>
        <a href="delete/delete_recipe.php?recipe_id=<?=$id?>" class="btn btn-danger btn-sm">מחיקת מתכון</a>     
    </div>             

    <!-- recpie image -->
    <figure class="article-image mt-md-3 mt-3">
        <img src="<?=$recpie['picLink']?>" class="img-fluid" style="width: 30em">
        <figcaption class="image-caption">
        <strong>פורסם בתאריך: <?=$recpie['date']?><span class="pubdate" pubdate></span></strong>
        <strong>| ע"י: <?=$recpie['userWrote']?>@</strong>
        </figcaption>
    </figure>
    
    <?php endwhile;?>

    <!-- ingredient list -->
    <?php
        $sql = "select * from ingredient where recpieID = $id";
        $result = $conn->query ($sql);
    ?>
    <form method="POST" id="ings">
        <div class="mb-md-4 mb-4">
            <p class="fw-bold fs-3">מרכיבים:</p>
            <ul class="list-group col-md-4">
            <?php while ($ingredients = $result->fetch_assoc()):?>
                <li id="check" class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox">
                        <?=$ingredients['ingredientName']?>               
                </li>
                <?php endwhile;?>
            </ul>
        </div>
    </form>
   
    <!-- recpie instructions -->
    <?php
        $sql = "select * from instruction where recpieID = $id";
        $result = $conn->query ($sql);
    ?>
    <div class="mb-md-5 mb-5">
        <p class="fw-bold fs-3">הוראות הכנה:</p>
        <?php while ($instructions = $result->fetch_assoc()):?>
        <div class="mb-md-4 mb-4">
            <input type="checkbox" class="mitzrahim-check-input" id="check1"><span class="fw-bold fs-5 text-decoration-underline px-3">שלב  <?=$instructions['instruction']?></span>
            <p class="ps-4"><?=$instructions['instructionText']?></p>
        </div>
        <?php endwhile;?>
    </div>
    
    <!-- share recpie modal -->
    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        שיתוף מתכון                 
    </button>
    <section id="share">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">ניהול שיתוף</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="">
                        <div class="modal-body">
                            <label for="user" class="form-label">שם משתמש</label>
                            <input type="text" class="form-control" id="user_name2">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ביטול</button>
                            <button type="submit" class="btn btn-primary">החל שיתוף</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>
<?php require_once("parts/footer.php");?>