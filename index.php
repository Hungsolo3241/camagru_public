<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php
include_once ('./model/config/setup.php');
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/f7d9248e42.js" crossorigin="anonymous"></script>
    <link href='./view/css/main.css' rel='stylesheet' type='text/css'>
    <link href='./view/css/font.css' rel='stylesheet' type='text/css'>
    <link href='./view/css/style.css' rel='stylesheet' type='text/css'>
    <title>Camagru</title>
</head>

<body>
    <div class="grid-container">
        <div class="nav">
            <div class="home">
                <a href="index.php>"></a><i class="fas fa-camera-retro fa-4x"></i></a>
            </div>
            <div class="icon-bar">
               <a class="active" href="#"><i class="fa fa-home"></i></a> 
               <a href="controller/update_profile_script.php"><i class="fa fa-search"></i></a> 
               <a href="view/html/camera.php"><i class="fa fa-envelope"></i></a>
               <a href="#"><i class="fa fa-map"></i></a>
               <a href="#"><i class="fa fa-calendar"></i></a>
               <a href="#"><i class="fa fa-address-book"></i></a>
               <a href="#"><i class="fa fa-globe"></i></a>
               <a href="controller/log_out.php"><i class="fa fa-trash"></i></a> 
         </div>
        </div>
        <div class="topbar">
            <div class="searchBox">
                <input class="searchInput" type="text" name="" placeholder="Search">
                <button class="searchButton" href=""><i class="fas fa-search"></i></button>
            </div>
            <div class="logo">
                <h1 id="brand"><i class="fas fa-camera-retro"></i> Camagru</h1>
            </div>
            <div class="social">
                <i class="fab fa-github-square fa-2x"></i>
                <i class="fas fa-location-arrow fa-2x"></i>
            </div>
        </div>
        <div class=" hero-main">
            <h1 id="hero-header">Welcome To <span>Camagru</span></h1>
            <p id="hero-text"><?=$_SESSION['username']; ?></p>
            <i id="hero-icon" class="fas fa-arrow-circle-down"></i>
            <div class="hero-button">
               <button type="button" onclick="alert('test');"></button>
            </div>
        </div>
        <div class="footer">

        </div>
    </div>
</body>

</html>