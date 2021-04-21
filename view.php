<!Doctype html>
<html>
<html>
<head>
<title>Action</title>
    <link rel = "icon" type = "image/png" href = "images/home.jpg">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="nav-bar">
           <div class="menu-right">
           <ul>
               <li><img src="images/home.png"><a href="home.html">Home</a></li>
               <li><img src="images/users.png"><a href="user.php">User List</a></li>
               <li><img src="images/contact.png"><a href="Contact.html">Contact Us</a></li>
               <li><img src="images/logout.png"><a href="Login.html">Logout</a></li>
           </ul>
        </div>
       </div>
<table border="2" class="table_big">
  <tr>
    <th colspan="8"><u>User List</u></th>
</tr>
  <tr>
    <td>Sl.no.</td>
    <td>Username</td>
    <td>Email_Id</td>
    <td>Password</td>
    <td>Matric School NAME</td>
    <td>SSC school</td>
    <td>Graduation College</td>
    <td>Profile Image</td>
</td>
  </tr>
  
<?php
include ("config.php");
 $var=$_GET['id'];
 $result = mysqli_query($db,"select  * from userdata where Id='$var'");
 $data = mysqli_fetch_array($result);
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
    
</table>

<?php mysqli_close($db); // Close connection ?>

</body>
</html>
