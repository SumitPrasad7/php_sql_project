<?php
  include "config.php";
  $var=$_GET['id'];
  $result= mysqli_query($db,"select * from userdata where Id='$var'");
  $data=mysqli_fetch_array($result);
  if(isset($_POST['update']))
  {
      $username = mysqli_real_escape_string($db,$_POST['name']);
      $email = mysqli_real_escape_string($db,$_POST['emailid']);
      $mypassword = mysqli_real_escape_string($db,$_POST['Password']);
      $msc = mysqli_real_escape_string($db,$_POST['matric']); 
      $ssc = mysqli_real_escape_string($db,$_POST['SSC']); 
      $grad= mysqli_real_escape_string($db,$_POST['college']);
      $photo=mysqli_real_escape_string($db,$_POST['image']);  
      $edit=mysqli_query($db,"update userdata set username='$username',Emailid='$email',Password='$mypassword',Matric='$msc',SSC='$ssc',College='$grad',Image='$photo' where Id='$var'");
      //$stmtinsert=$db->prepare($edit);
      //$result=$stmtinsert->execute(); 
      if($edit)
       {
          echo'<script>alert("value updated successfully")</script>';
       }
       else
       {
        echo'<script>alert("value not updated successfully")</script>';
       }    	
   }

  ?>
  <div class="nav-bar">
        
        <div class="menu-right">
        <ul>
            
            <li><img src="images/home.png"><a href="home.php">Home</a> </li>
            <li><img src="images/contact.png"><a href="home.html">Contact Us</a></li>
            <li><img src="images/logout.png"><a href="Login.html">Logout</a></li>
        </ul>
     </div>
    </div>

  <h3 style="color:Teal;"><u>Update Data</u></h3>

<form method="POST">
 <table>
   <tr><td>
  Name:</td><td> <input type="text" name="name" value="<?php echo $data['username'] ?>" placeholder="Enter Name" Required></td><tr>
  <tr><td>Email:</td><td><input type="text" name="emailid" value="<?php echo $data['Emailid'] ?>" placeholder="Enter emailid" Required></td></tr>
  <tr><td>Password:</td><td><input type="text" name="Password" value="<?php echo $data['Password'] ?>" placeholder="Enter Password" Required></td><tr>
  <tr><td>Matric :</td><td><input type="text" name="matric" value="<?php echo $data['Matric'] ?>" placeholder="Enter Matric details." Required></td><tr>
  <tr><td>SSC:</td><td><input type="text" name="SSC" value="<?php echo $data['SSC'] ?>" placeholder="Enter SSC details" Required></td><tr>
  <tr><td>College:</td><td><input type="text" name="college" value="<?php echo $data['College'] ?>" placeholder="Enter College" Required></td><tr>
  <tr><td>Image:</td><td><input type="file" name="image" value="<?php echo $data['Image'] ?>" Required></td><tr>
  <tr><td><input type="submit" name="update" value="Update" style="background-color:green;color:white;font-weight: bold;height:30px;width:130px;margin-left:70%;"></td><tr>
  </table>

</form>



<h3 style="color:Teal;"><u>Updated User Details:</u><h3>
<html>
<head>
<title>Action</title>
    <link rel = "icon" type = "image/png" href = "images/home.jpg">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<table border="2">
  <tr>
    <th>Sl.no</th>
    <th>Username</th>
    <th>Email_id</th>
    <th>Password</th>
    <th>Matric</th>
    <th>SSc</th>
    <th>College</th>
    <th>Image</th>

</td>
  </tr>

<?php

include "config.php"; // Using database connection file here

$records = mysqli_query($db,"select  * from userdata where Id='$var'"); 
while($data = mysqli_fetch_array($records))
{
?>
  <tr>
  <td><?php echo $data['Id']; ?></td>
            <td><?php echo $data['username']; ?></td>
            <td><?php echo $data['Emailid']; ?></td>
            <td><?php echo $data['Password']; ?></td>
            <td><?php echo $data['Matric']; ?></td>
            <td><?php echo $data['SSC']; ?></td>
            <td><?php echo $data['College']; ?></td>
            <td><?php echo $data['Image']; ?></td>
    </tr>	
    <tr>
      <td colspan="8"> <a href="user.php">Back</a> to User List</td>
</tr>
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>

</body>
</html>
  

  