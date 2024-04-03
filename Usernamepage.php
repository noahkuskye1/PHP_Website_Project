<!-- 
  Project Title: HTML Website
  Course: CSC340
  School: Bethel University
  Author: Noah Kuskye
  Date: 1/16/2024
  
  Description: The First Page that the user interacts with
-->
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
    <body>   
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
        <form action="Webpage1.html" name="user">
          <label for="username">Username</label>
          <input type="text" id="username" required>
          <label for="password">Password</label>
          <input type="password" id="password" required>
          <input type="checkbox" value="lsRememberMe" id="rememberMe"> <label for="rememberMe">Remember me</label>
          <input type="submit" value="Login" onclick="setCookie()">
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
