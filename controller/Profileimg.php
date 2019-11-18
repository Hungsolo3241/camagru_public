<?php
   $ID = $_SESSION['userid'];
   $user_email = $_SESSION['user_email'];

   if(isset($_POST['userdp']))
   {
       
       //if (empty($_POST['user_name']))
       //{
        //   echo"<script>alert('you cant leave this field empty!')</script>";
       //    return ;
       //}
       $userdp = $_POST['filetoUpload'];

	//inser/update userdp
       $sql = "UPDATE $db.user set userdp = ? WHERE userid = ?";
       $statement = $conn->prepare($sql);
       $statement->execute(array($userdp, $_SESSION['userid'])); 
       if ($statement->execute())
       {
           $message = "Hi there, Some information on your Camagru profile has been changed!";
           mail($user_email, "Profile details changed", $message, "From :info@camagru.co.za");
           echo"<script>alert('username changed!')</script>";
           return ;
       }
   }
?>