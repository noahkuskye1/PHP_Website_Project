<!DOCTYPE html>
  <html lang="en">
   <!-- title of page -->
    <head>
      <title> 
        Second Page
      </title>
      <link rel="stylesheet" href="styles.css">
      <meta charset="UTF-8">
      <style>
        table, th, td {
          border:1px solid black;
          background-color: aliceblue;
          }
      </style>
    </head>
    <body onload="startTime()">
    <!--Header with logo and text-->
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
      <!--Title of webpage-->
      <div style="background-color:#2b86b0;
        padding:15px;text-align:center;">
        <h2><b>Tables Page</b></h2>
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
        
      <!--Navigation bar-->
      <div class="topnav">
        <nav>
          <a href="Webpage1.php">Home page</a>
          <a href="FirstPage.php">First Page</a> 
          <a class = "active" href="SecondPage.php">Second Page</a> 
          <a href="ThirdPage.php">Third Page</a> 
          <a href="FourthPage.php">Fourth Page</a> 
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
        
      <p>This is the page where I created a table.</p>
      <!--Tables-->
      <p>This table shows the games from companies.</p>

      <table style = "height: 50%; width:50%; font-size:30px;">
        <tr> 
          <th>Company</th> 
          <th>Video Game</th>
          <th>Year</th>
        </tr>
        <tr>
          <td>Nintendo</td>
          <td>Super Mario Bros.</td>
          <td>1985</td>
        </tr>
        <tr>
          <td>Sega</td>
          <td>Sonic the Hedgehog</td>
          <td>1991</td>
        </tr>
        <tr>
          <td>Namco</td>
          <td>Pacman</td>
          <td>1980</td>
        </tr>
        <tr>
          <td>Gottlieb</td>
          <td>Q*bert</td>
          <td>1982</td>
        </tr>
      </table>  
      
      <br> 
      <br>
      <p>table for transportation vehicles.</p>
      <br>
      <br>

      <table style="height: 50%; width:50%; font-size:30px;">
        <tr>
          <th>Vehicle</th>
          <th>Company</th>
          <th>Brand</th>
          <th>Year</th>
        </tr>
        <tr>
          <td>Car</td>
          <td>Studebaker</td>
          <td>Champion</td>
          <td>1950</td>
        </tr>
        <tr>
          <td>Motorcycle</td>
          <td>Suzuki</td>
          <td>Hayabusa</td>
          <td>2006</td>
        </tr>
        <tr>
          <td>Boat</td>
          <td>Outerlimits</td>
          <td>SV-50</td>
          <td>2023</td>
        </tr>
        <tr>
        <td>Train</td>
          <td>NYCRR</td>
          <td>No. 999</td>
          <td>1893</td>
        </tr>
      </table>
      <br>
      <br>
    <script> 
      var myWindow;
      function openWin() {
        myWindow = window.open("", "", "width=400, height=200");
      }

      function closeWin() {
      myWindow.close();
      }
      </script>

      <input type="button" value="Open 'myWindow'" onclick="openWin()">
      <input type="button" value="Close 'myWindow'" onclick="closeWin()">
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
  </html>
