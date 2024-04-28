<!DOCTYPE html>
    <html lang="en">
   <!-- title of page -->
   <head>
        <title> 
        Fourth Page
        </title>
        <link rel="stylesheet" href="styles.css">
        <meta charset="UTF-8">
    </head>
    <!--Header with logo and name of site-->
    <body onload="startTime()">   
      <div class="container">
        <div class="header">
          <div class="image-center">
          <img alt="Yellow Husky"
              src="Logo.png" 
              style = "background-color: rgb(255, 255, 255); 
              border: 5px solid #eef604;
              height: 20%; width: 15%; float: left;">
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

        <!--title of webpage-->
        <div style="background-color:#2b86b0;
          padding:15px;text-align:center;">
          <h2><b>Video & Extras Page</b></h2>
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
        
        <!--Navagation bar-->
        <div class="topnav">
            <nav>
                <a href="Webpage1.php">Home page</a>
                <a href="FirstPage.php">First Page</a> 
                <a href="SecondPage.php">Second Page</a> 
                <a href="ThirdPage.php">Third Page</a> 
                <a class = "active" href="FourthPage.php">
                  Fourth Page
                </a> 
                <a href="FifthPage.php">Fifth Page</a> 
            </nav>
        </div>
        
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
        
        <p> This page is where I keep my video and other 
            miscellaneous items in. The pictures have 
            different borders and shapes.
        </p>
        
        <p>This is a video from my Youtube channel.</p>
        <!--Shows a video from Youtube-->
        <iframe width="420" height="315"
        src="https://www.youtube.com/embed/kTXxFYmWYSQ">
        </iframe>
        <br>
        <br>
        <p>
          These meters show the capacity of the C: and D: disk.
        </p>
        <br>
        <!--Shows a near empty disk meter-->
        <p>This is a meter of the C: disk.</p>
        <label for="disk_c">Disk usage C:</label>
        <meter id="disk_c" value="2" min="0" max="10">
          2 out of 10
        </meter>
        <p>If the meter is <em>low</em>, the disk is <em>not</em> 
            full. 
        </p>

        <!--Shows a full disk meter-->
        <label for="disk_d">Disk usage D:</label>
        <meter id="disk_d" value="0.6">60%</meter>
        <p>If the meter is <em>high</em>, the disk is 
            <em>almost or is</em> full.
        </p>

        <p> These are SVG shapes.</p>

        <!--svg shapes-->
        <div class="image-row">
          <div class="image-column">
            <svg width="300" height="200">
              <polygon points="100,10 40,198 190,78 10,78 160,198"
              style="fill:green;stroke:red;
              stroke-width:5;fill-rule:evenodd;" />
            </svg>
          </div>
          <div class ="image-column">
            <svg width="400" height="180">
              <rect x="50" y="20" rx="20" ry="20" width="150" 
              height="150" style="fill:rgb(13, 61, 27);
              stroke:rgb(0, 0, 0);stroke-width:5;opacity:0.5" />
            </svg>          
          </div>
        </div>
        <br>
        <button onclick="displayDate()">The time is?</button>
        <script>
          function displayDate() {
          document.getElementById("demo").innerHTML = Date();
          }
        </script>
        <h2 onclick="changeText(this)">Click on this text!</h2>

        <script>
        function changeText(id) {
          id.innerHTML = "You got me!";
        }
        </script>

        <p id="demo"></p>

        <!--footer-->
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
