<?php
include("authentication.php");
session_start();
session_destroy();
setcookie('username', $user, time()+60*60,'/');
setcookie('password', $password, time()+60*60,'/');
?>
<!DOCTYPE html>
    <html lang="en">
   <!-- title of page -->
    <head>
      <title> 
        Home Page
      </title>

      <!--Header for logo and text-->
      <link rel="stylesheet" href="styles.css">
      <meta charset="UTF-8">
    </head>
    <div class="container">
          <div class="header">
            <div class="image-center">
            <img alt="Yellow Husky"
                src="Logo.png" 
                style = "background-color: rgb(255, 255, 255); 
                border: 5px solid #eef604;
                height:20%; width: 15%; float: left;">
            </div>

            <div class="text-center">
              <h1 style="font-size: 80px;  background-color: 
              rgb(102, 178, 255); border: 5px solid #eef604;
                height: 100%; width: 75%; float:left;
                padding-left: 10px;"> 
                Noah Kuskye's Website
              </h1>
            </div>
          </div>
        </div> 
    <body>   
<?php
echo"You successfully logged out";
echo"To login: <a href = 'index.php'>Login</a>";
?>
</body>
</html>
