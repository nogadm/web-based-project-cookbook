<?php
session_start();
require_once "db.php";
?>
<!DOCTYPE html>
<html lang="he">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">

     <!-- jQuery -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="scripts.js"></script>

    <title>המתכון שלי</title>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="style.css">
</head>
<body dir="rtl" class="">
    <header id="header">
        <!-- nav bar -->
        <nav class="navbar navbar-light text-start">
            <div class="container-fluid" id="main-nav">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand px-3" href="login.php"><img class="img-fluid" src="images/recipe_icon.png" alt="" id="recipe_icon"><span class="ps-3">המתכון שלי</span></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="recipes.php">המתכונים שלי</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="add_recipe.php">פרסם מתכון חדש</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">התחברות</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registration.php">הרשמה</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>