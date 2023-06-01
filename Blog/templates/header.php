<?php
    include_once("helpers/url.php");
    include_once("./data/posts.php");
    include_once("./data/categories.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Math com Tiago</title>
    <!-- Colocar o link certo -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/style.css">
    <!-- Google Fonts> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href = "<?= $BASE_URL ?>" id="logo">
            <img src="<?= $BASE_URL ?>/img/logo.png" alt="Blog Math com Tiago">
        </a>
        <nav>
            <ul id="navbar">
                <li><a href="<?= $BASE_URL ?>" class="navbar-link">Página Inicial</a></li>
                <li><a href="#" class="navbar-link">Planos e Preços</a></li>
                <li><a href="#" class="navbar-link">Conteúdos e Exercícios</a></li>
                <li><a href="<?= $BASE_URL ?>/contact.php" class="navbar-link">Sobre e Contato</a></li>
            </ul>
        </nav>
    </header>