<?php
    include_once("./config/url.php");
    include_once("./config/process.php");
    //Limpar as mensagens que aparecem em cada sessão
    //$printMsg irá aparecer no index.php
    if(isset($_SESSION['msg'])){
        $printMsg = $_SESSION['msg'];
        $_SESSION['msg'] = '';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGENDA CRUD DO TIAGO</title>
    <!-- Bootstrap style and font awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" integrity="sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=$BASE_URL?>css/style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="<?=$BASE_URL?>index.php">
                <img src="<?=$BASE_URL?>img/logo.png" alt="Agenda CRUD do Tiago">
            </a>
            <div>
                <div class="navbar-nav">
                    <a href="<?=$BASE_URL?>index.php" class="nav-link" id="home-link">AGENDA DO TIAGO</a>
                    <a href="<?=$BASE_URL?>create.php" class="nav-link" id="home-link">ADICIONAR CONTATOS</a>
                </div>
            </div>
        </nav>
    </header>