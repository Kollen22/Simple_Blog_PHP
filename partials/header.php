<?php
    require_once 'connection/connection.php';
    $sen = new Usuario();
    $sen->connect('localhost', 'test', 'root', '');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link href="css/styles.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
<nav class=" navbar-light bg-light">
        <div class="container">
            <nav class="">
                <ul class="nav flex">
                <li class="nav-item">
                    <a class="nav-link active" href="#">LOGO</a>
                </li>
                <div></div>
                <div></div>
                <div></div>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Notícias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="perguntar.php">Criar</a>
                </li>
                <li class="nav-item">
                <div class="container-fluid">
                    <form class="d-flex" method="post">
                    <input class="form-control me-2" type="search" name="searc" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" name="enviar" type="submit">Search</button>
                    </form>
                </div><!--container-fluid-->
                </li>
                <div></div>
                <div></div>
                </ul><!--nav flex-->
                
                </nav><!---->
        </div><!--container-->
    </nav>