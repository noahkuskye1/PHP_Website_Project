<!DOCTYPE html>
    <html lang="en">
   <!-- title of page -->
   <head>
    <style>
      table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
      }
      </style>
        <title> 
            Fifth Page
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
            <h2><b>Calendar Page</b></h2>
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
        <!-- navigation bar -->
        <div class="topnav">
            <nav>
                <a href="Webpage1.php">Home page</a>
                <a href="FirstPage.php">First Page</a> 
                <a href="SecondPage.php">Second Page</a> 
                <a href="ThirdPage.php">Third Page</a> 
                <a href="FourthPage.php">Fourth Page</a> 
                <a class="active" href="FifthPage.php">
                  Fifth Page
                </a> 
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
        <p>This is the page for the calendar.</p>
        <div class='container'>
          <div class='calendar'>
          <?php
          function buildHTMLTable($left, $center, $right, $arrange) {
    $width = 400;
    $tabs = "<table border=1 width=".$width.">";
    $heading ="<table border=0 width=".$width.">".
            "<tr>".
            "<td>".
            $left.
            "</td><td>".
            $center.
            "</td><td>".
            $right.
            "</td>".
            "</tr>".
            "</table>";
    $tabs = $tabs."<caption>".$heading."</caption>";
    foreach($arrange as $i) {
        $tabs = $tabs."<tr>";
        foreach($i as $j) {
            $tabs = $tabs."<td>".$j."</td>";
        }
        $tabs = $tabs."</tr>";
    }
    $tabs = $tabs."</table>";
    
    return $tabs;
}
$current_time = time();
$year = $_GET['y'];
$current_year = date('Y', $current_time);
if(empty($year)) {
    $year = $current_year;
}
$month = $_GET['m'];
$current_month = date('n');
if(empty($month)) {
    $month = $current_month;
}
$month_name = date('F', mktime(0, 0, 0, $month, 10));
$show_current_day = ($month == $current_month) && ($year == $current_year);
$current_day = date('d', $current_time);
$dates = array(array("S","M","T","W","T","F","S"));
$columns = 5;
$rows = 7;
$days_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);
$day_change = date('w', strtotime("$year-$month-01"));
$n = 1;
for($i=1; $i<=$columns; $i++) {
    $row = array();
    for($j=1; $j<=$rows; $j++) {
        $insert = $n - $day_change;
        if($insert > 0 && $insert <= $days_in_month) {
            if($show_current_day &&
               $insert == $current_day) {
                array_push($row, "<b>".$insert."</b>");
            } else {
                array_push($row, strval($insert));
            }
        } else {
            array_push($row, "");
        }
        
        $n++;
    }
    array_push($dates, $row);
}
$url = $_SERVER['REQUEST_URI'];
$url = strtok($url, '?');
$choose_last_year = $year;
$choose_last_month = $month-1;
$choose_next_year = $year;
$choose_next_month = $month+1;
if($month == 1) {
    $choose_last_month = 12;
    $choose_last_year--;
}
if($month == 12) {
    $choose_next_month = 1;
    $choose_next_year++;
}
$choose_last = $url."?y=".$choose_last_year."&m=".$choose_last_month;
$choose_next = $url."?y=".$choose_next_year."&m=".$choose_next_month;
$pick_last = "<a href=".$choose_last.">&lt;Last&lt;</a>";
$pick_next = "<a href=".$choose_next.">&gt;Next&gt;</a>";
$heading = "<b>".$month_name." ".$year."</b>";
echo buildHTMLTable($pick_last, $heading, $pick_next, $dates);
?>
          </div>
      </div>
        <script src="CalendarFunction.js"></script>
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
