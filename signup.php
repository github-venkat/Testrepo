<?php
   include("connection.php");
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['name']);
      $myemail = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['psw']); 
      
      $sql = "INSERT INTO `users` (`id`, `username`, `password`, `email`, `create_at`) VALUES (NULL, '$myusername', '$mypassword', '$myemail',NULL);";

      $result = mysqli_query($db, $sql);

      if($result){
        echo "<script type='text/javascript'>alert('User Registered Successfully');</script>";
        header( "Location: sign_in.html" ); 
        die;

      }
      else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($result);
      }
      
    }
?>