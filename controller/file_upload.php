<?php
session_start();
require_once("model/config/database.php");

if (isset($_POST['submit'])){
    $userid = $_SESSION['userid'];
    $file = $_FILE['filetoUpload'];
    $fileName = $_FILES['filetoUpload']['name']; 
    $fileTmpName = $_FILES['filetoUpload']['tmp_name']; 
    $fileSize = $_FILES['filetoUpload']['size ']; 
    $fileError = $_FILES['filetoUpload']['error ']; 
    $fileType = $_FILES['filetoUpload']['type'];
    
    $fileExt = explode( '.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if (in_array($fileActualExt, $allowed)){
        if($fileError == 0){
            if($fileSize < 1000000){ 
                 $fileNameNew = uniqid('', true). "." .$fileActualExt;
                 $fileDest = '../uploads/'.$fileNameNew;
                 move_uploaded_file($fileTmpName, $fileDest);
                 $sql = "INSERT INTO $db.images (`userid`, `path`)
                VALUES ('$userid', '$fileNameNew')";
                 $stmt = $conn->prepare($sql);
                 $stmt->execute();
                 header('location: ../index.php');
            } else {
                echo "File too big";
            }
         } else{

             echo "There was an error uploading your file";
         }

    } else{
        echo "You cannot upload files of this type!";
    }
}

?>