
<?php
include("config.php");
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $username = mysqli_real_escape_string($db,$_POST['name']);
      $email = mysqli_real_escape_string($db,$_POST['emailid']);
      $mypassword = mysqli_real_escape_string($db,$_POST['Password']);
      $confpassword = mysqli_real_escape_string($db,$_POST['cpassword']); 
      $msc = mysqli_real_escape_string($db,$_POST['edu_10']); 
      $ssc = mysqli_real_escape_string($db,$_POST['edu_12']); 
      $grad= mysqli_real_escape_string($db,$_POST['grad']);
      $photo=mysqli_real_escape_string($db,$_POST['image']);  
      $sql="INSERT INTO userdata (username,Emailid,Password,matric,ssc,college,image) VALUES ('$username','$email','$mypassword','$msc','$ssc','$grad','$photo')";
      $stmtinsert=$db->prepare($sql);
      $result=$stmtinsert->execute();
      if($result)
      {  
          echo '<script>alert("Registered Successfully")</script>';
          header("location:Login.html");
      }
      else
      echo "unsuccessfully inserted";
   }
?>