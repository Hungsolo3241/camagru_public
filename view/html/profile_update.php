<!DOCTYPE html>
<html lang="en">
<?php 
require_once ('../../controller/update_profile_script.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/f7d9248e42.js" crossorigin="anonymous"></script>
    <link href='../css/main.css' rel='stylesheet' type='text/css'>
    <link href='../css/font.css' rel='stylesheet' type='text/css'>
    <link href='../css/style.css' rel='stylesheet' type='text/css'>
    <!-- <link href='../css/user.css' rel='stylesheet' type='text/css'> -->
    <title>Update Profile</title>
</head>

<body>
    <div class="grid-container">
        <div class="nav">
            <div class="home">
                <a href="../index.php>"></a><i class="fas fa-camera-retro fa-4x"></i></a>
            </div>
            <div class="icon-bar">
               <a class="active" href="#"><i class="fa fa-home"></i></a> 
               <a href="#"><i class="fa fa-search"></i></a> 
               <a href="#"><i class="fa fa-envelope"></i></a>
               <a href="#"><i class="fa fa-map"></i></a>
               <a href="#"><i class="fa fa-calendar"></i></a>
               <a href="#"><i class="fa fa-address-book"></i></a>
               <a href="#"><i class="fa fa-globe"></i></a>
               <a href="#"><i class="fa fa-trash"></i></a> 
         </div>
        </div>
        <div class="topbar">
            <div class="searchBox">
                <input class="searchInput" type="text" name="" placeholder="Search">
                <button class="searchButton" href="#"><i class="fas fa-search"></i></button>
            </div>
            <div class="logo">
                <h1 id="brand"><i class="fas fa-camera-retro"></i> Camgru</h1>
            </div>
            <div class="social">
                <i class="fab fa-github-square fa-2x"></i>
                <i class="fas fa-location-arrow fa-2x"></i>
            </div>
        </div>
        <div id="main">
        <form method="post" enctype="multipart/form-data">
        <table align = "center" width=400>
            <tr align = center>
                <td colspan = "8">
                    <h2>Update Profile</h2>
                </td>
            </tr>
            <tr>
                 <td align = "right"><strong>Update Username :</strong></td>
                 <td><input type="text" name="user_name" placeholder="Enter new username"></td>
                 <td align = "center" colspan = "8"><input type="submit" name="username" value="Update"></td>
            </tr>
            <tr>
                 <td align = "right"><strong>Update Email :</strong></td>
                 <td><input type="email" name="user_email" placeholder="Enter new email"></td>
                 <td align = "center" colspan = "8"><input type="submit" name="email" value="Update"></td>
            </tr>
            <tr>
                 <td align = "right"><strong>Update Password :</strong></td>
                 <td><input type="password" name="user_password" placeholder="Enter new password"></td>
            </tr>
            <tr>
                 <td align = "right"><strong>Re-Enter Password :</strong></td>
                 <td><input type="password" name="re_password" placeholder="Confrim your password"></td>
                 <td align = "center" colspan = "8"><input type="submit" name="password" value="Update"></td>
            </tr> 
        </table>
    </form>
        </div>
        </div>
        <div class="footer">

        </div>
    </div>
</body>

</html>
