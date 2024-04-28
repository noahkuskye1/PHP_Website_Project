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
           <div id="clock">&nbsp;</div>
           <?php
                date_default_timezone_set('UTC');
            ?>
          <script>
            var d = new Date(<?php echo time() * 1000 ?>);

            function updateClock() {
              // Increment the date
              d.setTime(d.getTime() + 1000);

              // Translate time to pieces
              var currentHours = d.getHours();
              var currentMinutes = d.getMinutes();
              var currentSeconds = d.getSeconds();

              // Add the beginning zero to minutes and seconds if needed
              currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
              currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;

              // Determine the meridian
              var meridian = (currentHours < 12) ? "am" : "pm";

              // Convert the hours out of 24-hour time
              currentHours = (currentHours > 12) ? currentHours - 12 : currentHours;
              currentHours = (currentHours == 0) ? 12 : currentHours;

              // Generate the display string
              var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + meridian;

              // Update the time
              document.getElementById("clock").firstChild.nodeValue = currentTimeString;
              }

              window.onload = function() {
              updateClock();
              setInterval('updateClock()', 1000);
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
          <!--Welcome message on home page-->
          <p id="demo"></p>
          <p id="p2">It's the Author!</p>
          <!--Article element-->
          <article>
          <h2>Welcome, <?php if(!empty($username)){ echo $username; }?> to the dashboard</h2>
            <p>My name is Noah Kuskye and this is 
            my webpage. Hope you enjoy the experience.</p> 
            <br>  
            <em>This text is emphasized.</em> 
            <p>My name is <i>Noah Kuskye</i><p>
            <p>
              <strong>
              This is my second website project in my life.
              </strong>
            </p>
            <p>This is the <sub>subscript</sub> element and this
            is the <sup>superscript</sup> element.</p>
            <p>There are times we need to make a <b>bold</b> move.</p>
          </article>

          <p>I like math, let me do some from JavaScript.</p>
          <br>
          <p><b>Example #1: </b> Math.ceil() rounds a number 
            <strong>up</strong> to its nearest integer:</p>

          <p id="ceil"></p>

          <script>
            document.getElementById("ceil").innerHTML = Math.ceil(10.35);
          </script>
          <br>
          <p><b>Example #2: </b> Math.sin(x) returns the sin of x (given in radians):</p>
          <p>Angle in radians = (angle in degrees) * PI / 180.</p>
          <br>
          <p id="sine"></p>

          <script>
            document.getElementById("sine").innerHTML = 
            "The sine value of 120 degrees is " + Math.sin(120 * Math.PI / 180);
          </script>
          <br>
          <p><b>Example #3: </b> <p>Math.cos(x) returns the cosine of x (given in radians):</p>
          <p>Angle in radians = (angle in degrees) * PI / 180.</p>
          
          <p id="cosine"></p>
          
          <script>
          document.getElementById("cosine").innerHTML = 
          "The cosine value of 120 degrees is " + Math.cos(120 * Math.PI / 180);
          </script>
          <script>
            document.getElementById("demo").innerHTML = "Hello World!";
          </script>
          <script>
            document.getElementById("p2").style.color = "blue";
          </script>
          <br>

          <?php 
          echo(pi());
          echo(min(0, 150, 30, 20, -8, -200) . "<br>");
          echo(max(0, 150, 30, 20, -8, -200));
          ?>
          <br>
          <?php 
          echo(min(0, 150, 30, 20, -8, -200) . "<br>");
          ?>
          <br>
          <?php 
          echo(max(0, 150, 30, 20, -8, -200));
          ?>
          <br>
          <?php
          echo("<a href=logout.php>logout</a>");
          ?>
          <div class="footer">
            <footer>
              <p>Author: Noah Kuskye</p>
                <p>
                noah.kuskye@betheluniversity.edu
                </p>
            </footer>
          </div>
    </body>
    </html>
