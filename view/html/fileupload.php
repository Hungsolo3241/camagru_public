<?php

	require_once('controller/file_upload.php');
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>UploadFiles</title>
</head>
<body>
	<form action= "../../controller/file_upload.php" method="POST" enctype="multipart/form-data">
	Select image to upload:
	<input type="file" name="filetoUpload" id="filetoUpload">
	<input type="submit" value="Upload Image" name="submit">
	</form> 
</body>
</html>