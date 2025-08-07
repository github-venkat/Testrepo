<?php
   include("connection.php");
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['name']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      session_start();
      $_SESSION['name'] = $myusername;
      
      $sql = "SELECT id FROM users WHERE username = '$myusername' and password = '$mypassword'";

      $result = mysqli_query($db, $sql);
      
      if (mysqli_num_rows($result) == 1) {
        header( "Location: welcome.php" ); 
        die;
      } else {
        echo "Wrong Password or Username!";
      }
    }
?>