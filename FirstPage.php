<!DOCTYPE html>
    <html lang="en">
   <!-- title of page -->
   <head>
        <title> 
            First Page
        </title>
        <link rel="stylesheet" href="styles.css">
        <meta charset="UTF-8">
    </head>
    <!-- Logo header -->
    <body onload="startTime()">   
      <div class="container">
        <div class="header">
          <div class="image-center">
          <img alt="Yellow Husky"
              src="Logo.png" 
              style="background-color: rgb(255, 255, 255); 
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

        <!-- title of webpage -->
        <div style="background-color:#2b86b0;
           padding:15px;text-align:center;">
            <h2><b>Forms Page</b></h2>
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
        <!-- navigation bar -->
        <div class="topnav">
            <nav>
                <a href="Webpage1.html">Home page</a>
                <a class="active" 
                   href="FirstPage.html">First Page</a> 
                <a href="SecondPage.html">Second Page</a> 
                <a href="ThirdPage.html">Third Page</a> 
                <a href="FourthPage.html">Fourth Page</a> 
                <a href="FifthPage.html">Fifth Page</a> 
            </nav>
          </div>
        <div class="column">
          <div class="aside">
            <aside>
              <h2>Other sites</h2>
              <h3>Youtube</h3>
              <p>
                <a href="https://www.youtube.com/@Retr0_Husky">
                  https://www.youtube.com/@Retr0_Husky
                </a>
              <br>
              
              <h3>Email</h3>
                <a href="noahkuskye@gmail.com">
                  noahkuskye@gmail.com
                </a>
            </aside>
          </div>
        <!-- paragraph the informs about the site's purpose -->
        <p>This is the page where I made a form.</p>
        <p>This is a <em>written form</em> that checks which 
            vehicle brand you own.</p>
        <!-- text form -->
        <div class="input-a">
        <form action="https://www.w3schools.com/action_page.php" 
            method = "POST" name="myForm">
            <label for="sport">Favorite sport:</label><br>
            <input type="text" id="sport" name="sport" required><br>
            <label for="movie">Favorite movie:</label><br>
            <input type="text" id="movie" name="movie" required><br>
            <label for="movie">Favorite number:</label>
            <input type="number" id="number" name="number" required>
            <br>
            <input type="submit" value="Submit">
        </form>
        <script>
          function validateForm() {
          let x = document.forms["myForm"]["sport"]["movie"]["number"].value;
            if (x == "") {
              alert("Form must be filled out");
            return false;
            }
          }
        </script>
        </div>

        <br>

        <p> This is a <em>checkbox form</em> that checks which vehicle 
            and brand you own.</p>
        <!-- checkbox form -->
        <form action="https://www.w3schools.com/action_page.php" method = "POST"
        name="check" onsubmit="validateForm()">
            <input type="checkbox" id="car1" name="car" value="Ford">
            <label for="car1"> I own a Ford</label><br>
            <input type="checkbox" id="car2" name="car" value="Chevy">
            <label for="car2"> I own a Chevy</label><br>
            <input type="checkbox" id="car3" name="car" value="Toyota">
            <label for="car3"> I own a Toyota</label><br>
            <input type="checkbox" id="car4" name="car" value="Honda">
            <label for="car4"> I own a Honda</label><br>
            <input type="checkbox" id="car5" name="car" value="Tesla">
            <label for="car5"> I own Tesla </label><br>
            <input type = "submit" value = "Submit">
          </form> 
          <script>
            function validateForm() {
            let x = document.forms["check"]["car1"].checked || document.forms["check"]["car2"].checked ||
            document.forms["check"]["car3"].checked || document.forms["check"]["car4"].checked
            ||document.forms["check"]["car5"].checked;
              if (x == true) {}
              else{
                alert("Checkbox must be filled out");
              }
            }
          </script>
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
