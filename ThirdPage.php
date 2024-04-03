<!DOCTYPE html>
    <html lang="en">
   <!-- title of page -->
   <head>
        <title> 
            Third Page
        </title>
        <link rel="stylesheet" href="styles.css">
        <meta charset="UTF-8">
    </head>
    <body onload="startTime()">   
        <!--Header of Logo and text-->
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
        <!-- Title of webpage-->
        <div style="background-color:#2b86b0;
          padding:15px;text-align:center;">
           <h1><b>Images Page</b></h1>
       </div>
       <div style="background-color:#ffffff;
          padding:15px;text-align:center;">
           <div id="txt"></div>

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
             document.getElementById('txt').innerHTML =  h + ":" + m + ":" + s + " " + session;
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
                <nav>
                    <a href="Webpage1.html">Home page</a>
                    <a href="FirstPage.html">First Page</a> 
                    <a href="SecondPage.html">Second Page</a> 
                    <a class = "active" 
                       href="ThirdPage.html">Third Page</a> 
                    <a href="FourthPage.html">Fourth Page</a> 
                    <a href="FifthPage.html">Fifth Page</a> 
                </nav>
            </nav>
        </div>

        <!--aside element-->
        <div class="aside">
          <aside>
            <h2>Other sites</h2>
            <h3>Youtube</h3>
            <p>
              <a href="https://www.youtube.com/@Retr0_Husky">
                https://www.youtube.com/@Retr0_Husky
              </a>
            </p>
            <h4>Email</h4>
            <p>
              <a href="noahkuskye@gmail.com">
                noahkuskye@gmail.com
              </a>
            </p>
          </aside>
        </div>

        <p>This is the page where I store many photos.</p>

        <!--Shows multiple images with different borders and shapes-->
        <div class="image-row">
        <div class="image-column">
        <img alt="Yellow Husky"
                src="Logo.png" 
                style="background-color: rgb(255, 255, 255); 
                border: 5px solid #eef604;
                height: 75%; width: 75%; float: left;
                border-radius: 50%;">
        </div>

        <div class="image-column">
            <img alt="Old American 4-4-0 steam loco"
            src="Old_locomotive.jpg" 
            style="background-color: rgb(255, 255, 255); 
            border: 5px solid #593c06;
            height: 75%; width: 75%; float: left;">
        </div>
        </div>

        <div class="image-row">
        <div class="image-column">
            <img alt="an old Studebaker electric roundabout"
            src="1902-studebaker-runabout.jpeg" 
            style="background-color: rgb(255, 255, 255); 
            border: 5px solid #ff9706;
            height: 25%; width: 75%; float: left;
            border-radius: 50%;">
        </div>

        <div class="image-column">
            <img alt="an anthro husky riding on a horse"
            src="avatar_horseback.jpeg" 
            style="background-color: rgb(255, 255, 255); 
            border: 5px solid #95931b;
            height: 75%; width: 75%; float: left;
            border-radius: 20px;">
        </div>
        </div>

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
