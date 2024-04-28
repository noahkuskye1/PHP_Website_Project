<!--
  Project Title: HTML Website
  Course: CSC340
  School: Bethel University
  Author: Noah Kuskye
  Date: 1/16/2024
  
  Description: The First Page that the user interacts with
-->
<?php
if (isset($_COOKIE["username"]) && isset($_COOKIE["password"])){
  $user= $_COOKIE["username"];
  $password= $_COOKIE["password"];
  echo"<script>
  getElementById('username').value = '$user';
  getElementById('pass').value = '$password';
  </script>";
}
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
    <form action = "authentication.php" name="user" method="post">
          <div class = "input-a"></div>
          <label for="username">Username</label>
          <input type="text" name="username" value="<?php echo "$user"; ?>"
		   required>
          <br>
          <label for="password">Password</label>
          <input type="password" name="pass" value="<?php echo "$password"?>"
		  required>
          <br>
          <input type="checkbox" value="lsRememberMe" id="rememberMe" name="remember"> <label for="rememberMe">Remember me</label>
          <input type="submit" value="login" name="login">
        </form>

</form>
        <script src="UsernameFunction.js">
          function validateForm() {
          let x = document.forms["user"]["username"]["password"].value;
            if (x == "") {
              alert("Name must be filled out");
            return false;
            }
          }
        </script>
    </body>
</html>
