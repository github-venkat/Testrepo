<?php
  define('DB_SERVER','localhost');
  define('DB_USER', 'root');
  define('DB_PASSWORD', '');
  define('DB_DATABASE','mydataa');

  $queriesDB= mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE) or kill("Connection to database got failed");

   if(1) {
      
      $first = mysqli_real_escape_string($queriesDB,$_POST['fir']);
      $last=mysqli_real_escape_string($queriesDB,$_POST['las']);
      $email = mysqli_real_escape_string($queriesDB,$_POST['ema']);
      $country=mysqli_real_escape_string($queriesDB,$_POST['con']);
      $issue = mysqli_real_escape_string($queriesDB,$_POST['iss']); 
      
      $sql = "INSERT INTO `queries` (`fir`, `las`, `ema`, `con`, `iss`) VALUES ('$first', '$last', '$email', '$country','$issue');";

      $result = mysqli_query($queriesDB, $sql);

      if($result){
        echo "<script type='text/javascript'>alert('Thankyou!!');</script>"; 
        die;

      }
      else {
        echo "ERROR: Could not able to execute" .mysqli_error($queriesDB);
      }
      
    }else{
      echo "Bye bye";
    }
?>