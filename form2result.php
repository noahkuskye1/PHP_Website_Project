<!DOCTYPE html>
    <html lang="en">
   <!-- title of page -->
    <head>
      <title> 
        Checkbox Page
      </title>

      <!--Header for logo and text-->
      <link rel="stylesheet" href="styles.css">
      <meta charset="UTF-8">
    </head>
    <body onload="startTime()">   
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

        <div style="background-color:#2b86b0;
           padding:15px;text-align:center;">
            <h2>Hello Everyone!</h2>
          </div>
          <div style="background-color:#ffffff;
          padding:15px;text-align:center;">
           <div id="clock"></div>

           <script>
           function startTime() {
             const today = new Date();
             let h = today.getHours();
             let m = today.getMinutes();
             let s = today.getSeconds();
             let session = "AM";
             m = checkTime(m);
             s = checkTime(s);
             if (h==0){
              h=12;
             }
             if (h > 12){
              h=h-12;
              session = "PM";
             }
             document.getElementById('clock').innerHTML =  h + ":" + m + ":" + s + " " + session;
             setTimeout(startTime, 1000);
           }
           
           function checkTime(i) {
             if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
             return i;
           }
           </script>
         </div>
          <!--Navigation Bar-->
          <div class="topnav">
            <nav>
              <a class = "active" 
                 href="Webpage1.php">Home page</a>
              <a href="FirstPage.php">First Page</a> 
              <a href="SecondPage.php">Second Page</a> 
              <a href="ThirdPage.php">Third Page</a> 
              <a href="FourthPage.php">Fourth Page</a> 
              <a href="FifthPage.php">Fifth Page</a> 
            </nav>
          </div>
          
          <!-- Other resources part-->
          <div class="aside">
          <aside>
            <h2>Other sites</h2>
            <h3>Youtube</h3>
            <p>
              <a href="https://www.youtube.com/@Retr0_Husky">
                https://www.youtube.com/@Retr0_Husky
              </a>
            </p>
            <h3>Email</h3>
            <p>
              <a href="noahkuskye@gmail.com">
                noahkuskye@gmail.com
              </a>
            </p>
          </aside>
        </div>
          <br>
          <h3>Your car(s) is:</h3>
          <br>
          <?php
           foreach($_POST['car'] as $value)
           {
             echo $value.'<br><br>';
           }
          ?>
          
          <br>
          <div class="footer">
            <footer>
              <p>Author: Noah Kuskye</p>
                <p>
                noah.kuskye@betheluniversity.edu
                </p>
            </footer>
          </div>
    </body>
    <?php
//error handler function
function customError($errno, $errstr) {
  echo "<b>Error:</b> [$errno] $errstr";
}

//set error handler
set_error_handler("customError");

//trigger error
echo($test);
?>  
</html> 
