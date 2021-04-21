<?php
include ("config.php");
 $var=$_GET['id'];
  $result= mysqli_query($db,"delete from userdata where Id='$var'");
  if(mysqli_query($db, $result))
  {
    echo '<script>alert("data deleted")</script>';
    header("location:user.php");
     
      
  }
  else{
    header("location:user.php");
      echo '<script>alert("data not deleted")</script>';
  }
 ?>
  
  
