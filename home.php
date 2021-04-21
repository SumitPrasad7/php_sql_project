<html>
    <head>
        <title>Home</title>
    <link rel = "icon" type = "image/png" href = "images/home.jpg">
        <meta name="viewport" content="width-device-width",intial-scale="1.0">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
       <div class="nav-bar">
           <div class="menu-right">
           <ul>
               <!-- <li>
                   <?php
                      session_start();
                      echo $_SESSION['username'];
                    ?></li> -->
               <li><img src="images/home.png"><a href="home.php">Home</a></li>
               <li><img src="images/users.png"><a href="user.php">User List</a></li>
               <li><img src="images/contact.png"><a href="Contact.html">Contact Us</a></li>
               <li><img src="images/logout.png"><a href="Login.html">Logout</a></li>
           </ul>
        </div>
       </div>

       <div class="grp_n">
           <h3><b>Welcome User.</b></h3>
           <br>
           <p style="color:black;width:50%;margin-left:25%;">
           Welcome to the Home page.<br>
           This is a site which allows you to access list of all users , contact us , and logout of the site to login again.
           One can also register himself/herself with a new account.
           All the above mentioned functions are available on the navigation bar above as Home,User List,Contact us,and Logout.</p>
        </div>
    </body>
</html>