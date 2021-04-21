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
               <li><img src="images/home.png"><a href="home.php">Home</a></li>
               <li><img src="images/users.png"><a href="user.php">User List</a></li>
               <li><img src="images/contact.png"><a href="Contact.html">Contact Us</a></li>
               <li><img src="images/logout.png"><a href="Login.html">Logout</a></li>
           </ul>
        </div>
       </div>

<table border="2" class="table-big">
  <tr>
    <th colspan="5"><u>User List</u></th>
</tr>
  <tr>
    <td>Sl.no.</td>
    <td>Username</td>
    <td colspan="3">Action</td>
</td>
  </tr>

<?php

include "config.php"; // Using database connection file here

$records = mysqli_query($db,"select  Id from userdata"); 
$recordsec = mysqli_query($db,"select  username from userdata");// fetch data from database
while(($data = mysqli_fetch_array($records))&&($datasec = mysqli_fetch_array($recordsec)))
{
?>
  <tr>
    <td><?php echo $data['Id']; ?></td>
    <td><?php echo $datasec['username']; ?></td>
    <td><a href="edit.php?id=<?php echo $data['Id']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['Id']; ?>">Delete</a></td>
    <td><a href="view.php?id=<?php echo $data['Id']; ?>">View</a></td>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>

</body>
</html>
  