<?php
include('session.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Attendance Recording & Monitoring System (ARMS)</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>
  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Monitor Attendance</span>
          <div class="mdl-layout-spacer"></div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search">
              <label class="mdl-textfield__label" for="search">Enter your query...</label>
            </div>
          </div>
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">more_vert</i>
          </button>
          <ol class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <a class="mdl-navigation__link" href="logout.php"><li class="mdl-menu__item">LogOut</li></a>
            <a class="mdl-navigation__link" href="about.php"><li class="mdl-menu__item">About</li></a>
            <a class="mdl-navigation__link" href="contact.php"><li class="mdl-menu__item">Contact</li></a>
          </ol>
        </div>
      </header>
      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
          <img src="images/sbmp.jpg" class="demo-avatar">

        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link" href="index.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Home</a>
          <a class="mdl-navigation__link" href="homepage.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">face</i>Monitor Attendance</a>
          <a class="mdl-navigation__link" href="modiattend.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">flag</i>Modify Attendance</a>
          <a class="mdl-navigation__link" href="addstudent.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">delete</i>Add Student</a>
          <a class="mdl-navigation__link" href="defaulter.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">report</i>Check Defaulter</a>
          <a class="mdl-navigation__link" href="addsubject.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">forum</i>Add Subject</a>
          <a class="mdl-navigation__link" href="subjectregister.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">flag</i>Subject Registration</a>
          <a class="mdl-navigation__link" href="newteacher.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">flag</i>Add Teacher</a>
     
          <div class="mdl-layout-spacer"></div>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i><span class="visuallyhidden">Help</span></a>
        </nav>
      </div>
      <main class="mdl-layout__content mdl-color--grey-100">
      
        <form id="senddata" method="_GET">
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?" id="SubCode" name="SubCode">
            <label class="mdl-textfield__label" for="SubCode">Subject Code...</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
        <br>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?" id="rollno" name="rollno">
            <label class="mdl-textfield__label" for="rollno">Roll Number...</label>
            <span class="mdl-textfield__error">Input is not a number!</span>          
          </div>
        <br>
           <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="date" date ="yyyy-mm-dd" id="datefrom" name="datefrom">
            <label class="mdl-textfield__label" for="datefrom">Date From...</label>
          </div>
        <br>
        
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="date" date ="yyyy-mm-dd" id="dateto" name="dateto">
            <label class="mdl-textfield__label" for="dateto">Date To...</label>
            
          </div>
        <br>
          <div>
              <button type="submit" class="mdl-chip" form="senddata" name="search" id="search" formmethod="_GET">
                <span class="mdl-chip__text">Submit</span>
              </button>
          </div>

        </form>
        <?php
          echo "logged In".$login_session."<br>";
          error_reporting(0);
          $servername = "localhost";
          $username = "viral";
          $password = "viral";
          $dbname = "student";

          $conn = new mysqli($servername, $username, $password, $dbname);
          
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          } 
          if (isset($_GET["search"]))
          {
              $rollno=$_GET["rollno"];
              $dateto=$_GET["dateto"];
              $datefrom=$_GET["datefrom"];
              $subcode=$_GET["SubCode"];
            
              if(empty($datefrom) and empty($dateto) and (!empty($subcode)) and (!empty($rollno)))
              {
                $sqlsubcodes="SELECT sub_name,lecture FROM student.subject where sub_code = '$subcode' " ;
                $result = $conn->query($sqlsubcodes);
                $row=$result->fetch_assoc();
                echo "Subject Name : ".$row["sub_name"]."<br> Total Lectures : ".$row["lecture"];
                $sqlrollnosubcode="SELECT *,COUNT(*) as NumLec FROM student.attendance where attend_stud_id = '$rollno' AND attend_sub_code = '$subcode' and status= 1 ";
                echo "<table class='mdl-data-table mdl-js-data-table mdl-data-table mdl-shadow--2dp'>",
                    "<tr><th>ID</th><th>Subject Code</th><th>Count</th></tr>";

                $result = $conn->query($sqlrollnosubcode);
                  if ($result->num_rows > 0)
                  {
                    // output data of each row
                    while($row = $result->fetch_assoc()) 
                    {
              
                      echo "<tr><td>" . $row["attend_stud_id"]. "</td><td>" ."" .$row["attend_sub_code"]."</td><td>". $row["NumLec"]."</td></tr>";  
                     }
                  }  
                  
              }
              else if(empty($datefrom) and empty($dateto) and empty($subcode) and !empty($rollno))
              {
                $sqlsubcodes="SELECT stud_name FROM student.student where stud_id = '$rollno'" ;
                $result = $conn->query($sqlsubcodes);
                $row=$result->fetch_assoc();
                echo "Student Name : ".$row["stud_name"];
                $sqlsubcodes="SELECT sub_id FROM student.sub_reg where student_id = '$rollno'" ;
                $result = $conn->query($sqlsubcodes);
                echo "<table class='mdl-data-table mdl-js-data-table mdl-data-table mdl-shadow--2dp'>",
                          "<tr><th>Subject Code</th><th>Subject Name</th><th>Count</th><th>Total Lectures</th></tr>";

                if($result->num_rows > 0)
                {
                    while ($row=$result->fetch_assoc()) {
                      $a=$row["sub_id"];
                      $sqltl="SELECT sub_name,lecture FROM student.subject where sub_code= '$a'" ;
                      $re = $conn->query($sqltl);
                      $rw=$re->fetch_assoc();
                      $sqlrollnosubcode="SELECT attend_sub_code,COUNT(*) as NumLec FROM student.attendance where attend_stud_id = '$rollno' and attend_sub_code= '$a' and status = 1";
                            $result1 = $conn->query($sqlrollnosubcode);
                            $row1=$result1->fetch_assoc();                          
                            echo "<tr>". "<td>" ."" .$a."</td><td>". $rw["sub_name"]."</td><td>". $row1["NumLec"]."</td><td>". $rw["lecture"]."</td></tr>";    

                    }
                }
              } 
              else if(!empty($subcode) and empty($datefrom) and empty($datefrom) and empty($rollno) )
              {
                $subcode=$_GET["SubCode"];
                $sqlsubcodes="SELECT sub_name,lecture FROM student.subject where sub_code = '$subcode' " ;
                $result = $conn->query($sqlsubcodes);
                $row=$result->fetch_assoc();
                echo "Subject Name : ".$row["sub_name"]."<br> Total Lectures : ".$row["lecture"];
                $sqlsubcodes="SELECT student_id FROM student.sub_reg where sub_id = '$subcode' " ;
                $result = $conn->query($sqlsubcodes);
                echo "<table class='mdl-data-table mdl-js-data-table mdl-data-table mdl-shadow--2dp'>",
                          "<tr><th>Roll No</th><th>Student Name</th><th>Count</th></tr>";

                if($result->num_rows > 0)
                {
                    while ($row=$result->fetch_assoc()) {
                      $a=$row["student_id"];
                      $sqlrollnosubcode="SELECT attend_stud_id,COUNT(*) as NumLec FROM student.attendance where attend_sub_code = '$subcode' and attend_stud_id= '$a' and status = 1";
                            $result1 = $conn->query($sqlrollnosubcode);
                            $row1=$result1->fetch_assoc(); 
                            $sqlsname="SELECT stud_name FROM student.student where stud_id = '$a' " ;
                            $resultn = $conn->query($sqlsname);
                            $rown=$resultn->fetch_assoc();                         
                            echo "<tr>". "<td>" ."" .$a."</td><td>". $rown["stud_name"]."</td><td>". $row1["NumLec"]."</td></tr>";    

                    }
                }
              }
              else if (!empty($subcode) and !empty($rollno) and !empty($datefrom) and !empty($dateto))
              {
                    $rollno=$_GET["rollno"];
                    $dateto=$_GET["dateto"];
                    $datefrom=$_GET["datefrom"];
                    $subcode=$_GET["SubCode"];
                     $sqlsubcodes="SELECT CAST(datetime1 AS DATE) AS datetime1,attend_stud_id,attend_sub_code FROM student.attendance where status=1 and attend_stud_id='$rollno' and datetime1 > '$datefrom' and datetime1 < '$dateto' and attend_sub_code='$subcode' ";
                    $result = $conn->query($sqlsubcodes);
                    if($result->num_rows > 0)
                    {
                        echo "<table class='mdl-data-table mdl-js-data-table mdl-data-table mdl-shadow--2dp'>",
                              "<tr><th>Roll No</th><th>Subject Code </th><th>Date </th></tr>";
                        while($row=$result->fetch_assoc())
                        {
                              echo "<tr>". "<td>" ."" .$rollno."</td><td>". $subcode."</td><td>". $row["datetime1"]."</td></tr>";
                        }
                    }
                    else
                    {
                        echo "No Rows To Display ";
                    }
                }
                else if (empty($subcode) and empty($rollno) and !empty($datefrom) and !empty($dateto))
                {
                    $rollno=$_GET["rollno"];
                    $dateto=$_GET["dateto"];
                    $datefrom=$_GET["datefrom"];
                    $subcode=$_GET["SubCode"];
                     $sqlsubcodes="SELECT CAST(datetime1 AS DATE) AS datetime1,attend_stud_id,attend_sub_code FROM student.attendance where status=1 and datetime1 > '$datefrom' and datetime1 < '$dateto' ";
                    $result = $conn->query($sqlsubcodes);
                    echo "<table class='mdl-data-table mdl-js-data-table mdl-data-table mdl-shadow--2dp'>",
                              "<tr><th>Roll No</th><th>Subject Code </th><th>Date </th></tr>";
                    while($row=$result->fetch_assoc())
                    {
                          echo "<tr>". "<td>" ."" .$row[attend_stud_id]."</td><td>". $row["attend_sub_code"]."</td><td>". $row["datetime1"]."</td></tr>";
                    }
                }
                else if (!empty($subcode) and empty($rollno) and !empty($datefrom) and !empty($dateto))
                {
                    $rollno=$_GET["rollno"];
                    $dateto=$_GET["dateto"];
                    $datefrom=$_GET["datefrom"];
                    $subcode=$_GET["SubCode"];
                     $sqlsubcodes="SELECT CAST(datetime1 AS DATE) AS datetime1,attend_stud_id,attend_sub_code,status FROM student.attendance where datetime1 > '$datefrom' and datetime1 < '$dateto' AND attend_sub_code='$subcode' ";
                    $result = $conn->query($sqlsubcodes);
                    echo "<table class='mdl-data-table mdl-js-data-table mdl-data-table mdl-shadow--2dp'>",
                              "<tr><th>Roll No</th><th>Subject Code </th><th>Date </th><th>Status</th></tr>";
                    while($row=$result->fetch_assoc())
                    {
                          echo "<tr>". "<td>" ."" .$row[attend_stud_id]."</td><td>". $row["attend_sub_code"]."</td><td>". $row["datetime1"]."</td><td>". $row["status"]."</td></tr>";
                    }
                }
                else
                  echo"No Option Avaliable Pls Try Another Option Thats Avaliable";
            }
                else
                  echo "No Rows";
      
            $conn->close();
            ?>
          </div>

      </main>
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" style="position: fixed; left: -1000px; height: -1000px;">
        <defs>
          <mask id="piemask" maskContentUnits="objectBoundingBox">
            <circle cx=0.5 cy=0.5 r=0.49 fill="white" />
            <circle cx=0.5 cy=0.5 r=0.40 fill="black" />
          </mask>
          <g id="piechart">
            <circle cx=0.5 cy=0.5 r=0.5 />
            <path d="M 0.5 0.5 0.5 0 A 0.5 0.5 0 0 1 0.95 0.28 z" stroke="none" fill="rgba(255, 255, 255, 0.75)" />
          </g>
        </defs>
      </svg>
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 250" style="position: fixed; left: -1000px; height: -1000px;">
        <defs>
          <g id="chart">
            <g id="Gridlines">
              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="27.3" x2="468.3" y2="27.3" />
              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="66.7" x2="468.3" y2="66.7" />
              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="105.3" x2="468.3" y2="105.3" />
              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="144.7" x2="468.3" y2="144.7" />
              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="184.3" x2="468.3" y2="184.3" />
            </g>
            <g id="Numbers">
              <text transform="matrix(1 0 0 1 485 29.3333)" fill="#888888" font-family="'Roboto'" font-size="9">500</text>
              <text transform="matrix(1 0 0 1 485 69)" fill="#888888" font-family="'Roboto'" font-size="9">400</text>
              <text transform="matrix(1 0 0 1 485 109.3333)" fill="#888888" font-family="'Roboto'" font-size="9">300</text>
              <text transform="matrix(1 0 0 1 485 149)" fill="#888888" font-family="'Roboto'" font-size="9">200</text>
              <text transform="matrix(1 0 0 1 485 188.3333)" fill="#888888" font-family="'Roboto'" font-size="9">100</text>
              <text transform="matrix(1 0 0 1 0 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">1</text>
              <text transform="matrix(1 0 0 1 78 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">2</text>
              <text transform="matrix(1 0 0 1 154.6667 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">3</text>
              <text transform="matrix(1 0 0 1 232.1667 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">4</text>
              <text transform="matrix(1 0 0 1 309 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">5</text>
              <text transform="matrix(1 0 0 1 386.6667 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">6</text>
              <text transform="matrix(1 0 0 1 464.3333 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">7</text>
            </g>
            <g id="Layer_5">
              <polygon opacity="0.36" stroke-miterlimit="10" points="0,223.3 48,138.5 154.7,169 211,88.5
              294.5,80.5 380,165.2 437,75.5 469.5,223.3 	"/>
            </g>
            <g id="Layer_4">
              <polygon stroke-miterlimit="10" points="469.3,222.7 1,222.7 48.7,166.7 155.7,188.3 212,132.7
              296.7,128 380.7,184.3 436.7,125 	"/>
            </g>
          </g>
        </defs>
      </svg>
      <a href="" target="_blank" id="view-source" class=""></a>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>
