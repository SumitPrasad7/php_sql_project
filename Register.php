<?php
/*include("config.php");
$errors=array();
      // username and password sent from form 
      $name = mysqli_real_escape_string($db,$_POST['name']);
      $email = mysqli_real_escape_string($db,$_POST['email-id']);
      $mypassword = mysqli_real_escape_string($db,$_POST['Password']); 
      $conpass = mysqli_real_escape_string($db,$_POST['conpass']);

//chekcing variables is empty or not
if(empty($name)){array_push($errors,"username is required")};
if(empty($email)){array_push($errors,"emailid is required")};
if(empty($mypassword)){array_push($errors,"please enter the passowrd")};
if(empty($conpass)){array_push($errors,"please re-enter the passowrd")};
if($mypassword!=$conpass){array_push($errors,"Password doesn't match")};
 
//checking existing user

$check_query="select * from userdata where username='$name' or Emailid='$email'";
$result=mysqli_query($db,$check_query);
$user=mysqli_fetch_assoc($result);
if($user)
{
    if($user['username']=='$name'){array_push($errors,"username already Exists")};
    if($user['Emailid']=='$email'){array_push($errors,"Emailid already Registered")};
}
 //Register user
 if(count[$errors]==0){
 $query="INSERT INTO userdata(user,Emailid,Password)VALUES('$name','$email','$mypassword')";
 }*/
    
$showAlert = false; 
$showError = false; 
$exists=false;
    
if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    // Include file which makes the
    // Database Connection.
    include 'config.php';   
    
    $username = $_POST["name"]; 
    $email=$_POST["emailid"]; 
    $password = $_POST["Password"]; 
    $copassword = $_POST["cpassword"];
            
    
    $sql = "Select * from userdata where username='$username' or Emailid='$email'";
    
    $result = mysqli_query($db, $sql);
    
    $num = mysqli_num_rows($result); 
    
    // This sql query is use to check if
    // the username is already present 
    // or not in our Database
    if($num == 0) {
        if(($password == $copassword) && $exists==false) {
    
            $hash = password_hash($password, 
                                PASSWORD_DEFAULT);
                
            // Password Hashing is used here. 
            $sql = "INSERT INTO userdata ( `username`, 
                `Emailid`, `Password`) VALUES ('$username', 
                '$email', '$password')";
    
            $result = mysqli_query($db, $sql);
    
            if ($result) {
                $showAlert = true; 
            }
        } 
        else { 
            $showError = "Passwords do not match"; 
        }      
    }// end if 
    
   if($num>0) 
   {
      $exists="Username not available"; 
   } 
    
}//end if   

?>