<?php
	$target_dir = "camagru/uploads/";
	$target_file = basename($_FILES["filetoUpload"]["name"]);
	$uploadOK = 1;
	$imageFileType = "." . strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
	//var_dump($target_file);
	if (isset($_POST["submit"]))
	{
		$check = getimagesize($_FILES["filetoUpload"]["tmp_name"]);
		if ($check !== false)
		{
			// use the get message method here
			echo "File is an image - ". $check["mime"]. ".";
			$uploadOK = 1;
		}
		else 
		{
			// do the same thing here
			echo "File is not an image.";
			$uploadOK = 0;
		}
	}
	// check to see if file exists
	if (file_exists($target_file))
	{
		// get message here;
		echo "Sorry, file already exists.";
		$uploadOK = 0;
	}
	// file size limit
	if ($_FILES["filetoUpload"]["size"] > 2000000)
	{
		//get message
		echo "Sorry, your file is too large.";
		$uploadOK = 0;
	}
	// file type limit
	if ($imageFileType != ".jpg" && $imageFileType != ".jpeg" && $imageFileType != ".png" && $imageFileType != ".gif")
	{
		// get message
		echo "Sorry, only jpg, jpeg, png & GIF files are allowed.";
		$uploadOK = 0;
	}
	// image upload status
	if ($uploadOK == 0)
	{
		// get message
		echo "Sorry, your file was not uploaded."; 
	}
	else
	{
		// $tmp = $_FILES['filetoUpload']['tmp_name'];
		// move_uploaded_file($tmp, $target_file);
		// die();
		if (move_uploaded_file($_FILES["filetoUpload"]["tmp_name"], $target_file))
		{
			//get message here;
			echo "The file has been uploaded";
			$sql = "INSERT INTO $db.images (`userid`, `path`)
			VALUES ('userid','$fileDest')";

			echo "we are here";
			$conn->execute($sql);
			echo "this far";
			$stmt = $conn->prepare($sql);


			$stmt->execute();

			echo "should work";
		}
		else 
		{
			// get message
			echo "Sorry, there was an error uploading your file.";
		}
	} 
?>