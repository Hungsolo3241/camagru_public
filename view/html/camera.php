<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<script src = "/camagru/controller/camera.js"></script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>CameraUploads</title>
</head>
<body>
	<canvas id="canvas"></canvas>
	<video id="video" autoplay="true"></video>
	<input type="file" id="fileupload"/>
	<input type="button" id="capture" value="snap!!"/>
</body>
</html> -->

<?php
  require("../../model/config/database.php");
  session_start();
  
  $userid = $_SESSION['userid'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Camera</title>
        <link rel="stylesheet" href="../css/main.css">
        
    <body>
      <div class="navbar">
          <h1>Camera</h1>
      </div>
      <div class="top-container">
          <video id="video" width="400" height="300">No streaming available...</video>
          <button id="photo-button" class="btn btn-dark">Take Photo</button>         
          <canvas id="canvas" height="300" width="400"></canvas>
          <input type="submit" id="clear-button" class="btn btn-light" value="Delete">
          <form action="/camagru/controller/file_upload.php" method="POST">
          <input type="file" name="filetoUpload" id="filetoUpload">
          <input type="submit" value="Upload Image" name="submit">
            <input type="hidden" name="img" id="img" required>
            <button id="photo-button" class="btn btn-dark" name="submit">Save Photo</button>
          </form>
      </div>
    <div>
        <!-- <img src="./stickers/images.jpeg" id="emojis" alt="emojis" onclick="addSticker('emojis', 0)"> -->
        <img src="/camagru/view/stickers/2_1_smiley.png" id="rick" alt="rick" onclick="addSticker('rick', 50)">
        <img src="/camagru/view/stickers/2_2_pineapple.png" id="stormtrooper" alt="stormtrooper" onclick="addSticker('stormtrooper', 100)">
        <img src="/camagru/view/stickers/2_3_bart.png" id="mouf" alt="mouf" onclick="addSticker('mouf', 150)">
    </div><br /><hr /><br />
      <div class="bottom-container">
          <div id="photos">
            <?php
              // $sql = "SELECT * FROM $db.images WHERE userid = ? ORDER BY upload_date DESC LIMIT 6";
              // $stmt = $conn->prepare($sql);
              // $stmt->execute([$userid]);
              // $images = $stmt->fetchAll(); 
              
              // if($images){
              //   foreach ($images as $image) {
              //     echo '<img src="../../uploads/'.$image['path'].'">';
              //   }
              // }
            ?>
          </div>
      </div>
    </body>
    <script src="../../controller/camera.js"></script>
    </head>
</html>