<?php
require_once("helpers/url.php");
require_once("data/categories.php");
require_once("data/posts.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogzada</title>
    <!--CSS-->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400&display=swap" rel="stylesheet">
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= $BASE_URL ?>"><img style="width: 50px;" src="<?= $BASE_URL ?>/img/logo.svg" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-center " id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link pe-5 text-light" href="<?= $BASE_URL ?>">Home</a>
                <a class="nav-link pe-5 text-light" href="#">Categorias</a>
                <a class="nav-link pe-5 text-light" href="#">Sobre</a>
                <a class="nav-link pe-5 text-light" href="<?= $BASE_URL ?>/contato.php">Contato</a>
            </div>
            </div>
        </div>
    </nav>
</header>