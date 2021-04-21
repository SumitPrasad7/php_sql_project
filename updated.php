<!Doctype html>
<html>
<html>
<head>
<title>Embed PHP in a .html File</title>
</head>
<body>
<table border="2">
  <tr>
    <td>sl.no</td>
    <td>username</td>
</td>
  </tr>

<?php

include "config.php"; // Using database connection file here
$var=$_GET['id'];
$records = mysqli_query($db,"select  Id from userdata where Id='$var'"); 
$data = mysqli_fetch_array($records)
{
?>
  <tr>
    <td><?php echo $data['Id']; ?></td>
    <td><?php echo $data['username']; ?></td>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>

</body>
</html>
