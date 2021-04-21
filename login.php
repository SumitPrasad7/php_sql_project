<?php
include("config.php");
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $email = mysqli_real_escape_string($db,$_POST['Email_Id']);
      $mypassword = mysqli_real_escape_string($db,$_POST['Password']); 
      
      $sql = "SELECT * FROM userdata WHERE Emailid = '$email' and Password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      $data=mysqli_fetch_array($sql);
      // If result matched $myusername and $mypassword, table row must be 1 row
		if($count!=0)
       { 
         header("location:home.php");
      }else
      {
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Wrong user details. Login again');
        window.location.href='Login.html';
        </script>");
      }
  }
?>
