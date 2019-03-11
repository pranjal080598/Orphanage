<?php
include('session.php');
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Orphanation</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Owl carousel -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- Modernizr -->
        <!-- <script src="assets/js/modernizr-2.6.2.min.js"></script> -->

        <style type="text/css">
          body{
              font-family: Arail, sans-serif;

          }
          /* Formatting search box */
          .search-box{
              margin-left: 20px;
              /*width: 300px;*/
              position: relative;
              display: inline-block;
              font-size: 14px;
              margin-top: 10px;
              margin-left: 10px;
              margin-bottom: 10px;
          }
          .search-box input[type="text"]{
              height: 32px;
              width: 30px;
              padding: 5px 10px;
              border: 1px solid #CCCCCC;
              font-size: 14px;
              background-color: #fff;
              display:inline-block;
          }
          .result{
              position: absolute;        
              z-index: 999;
              top: 100%;
              left: 150px;
          }
          .search-box input[type="text"], .result{
              width: 70%;
              box-sizing: border-box; 
              display:inline-block;
          }
          /* Formatting result items */
          .result p{
              margin: 0;
              padding: 7px 10px;
              border: 1px solid #CCCCCC;
              border-top: none;
              cursor: pointer;   
              background-color: #fff;
          }
          .result p:hover{
              background: #f2f2f2;
          }
          .button {
            background: #fff;
            border: none;
            border-radius: 0;
            color: #1f76bd;
            padding: 10px 25px;
            border: 1px solid transparent;
           
          }
          #i1{
            display:inline-block;
          }

          .button:hover {
              /*background: #fff;*/
              /*color: #1f76bd;*/
              background: #1f76bd;
              color: #fff;
              border: 1px solid #1f76bd;
            }
      </style>
      <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
      <script type="text/javascript">
          $(document).ready(function(){
              $('.search-box input[type="text"]').on("keyup input", function(){
                  /* Get input value on change */
                  var inputVal = $(this).val();
                  var resultDropdown = $(this).siblings(".result");
                  if(inputVal.length){
                      $.get("backend-search-donate.php", {term: inputVal}).done(function(data){
                          // Display the returned data in browser
                          resultDropdown.html(data);
                      });
                  } else{
                      resultDropdown.empty();
                  }
              });
              
              // Set search input value on click of result item
              $(document).on("click", ".result p", function(){
                  $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
                  $(this).parents(".result").empty();
              });
          });
          function myfilter(){

          }
          </script>
    </head>

    <body>


    <header class="main-header">
        
    
        <nav class="navbar navbar-static-top">

            <div class="navbar-top">

              <div class="container">
                  <div class="row">

                    <div class="col-sm-6 col-xs-12">

                        <ul class="list-unstyled list-inline header-contact">
                            <li> <i class="fa fa-phone"></i> <a href="tel:">022 28722876 </a> </li>
                             <li> <i class="fa fa-envelope"></i> <a href="contact@orphanation.org">contact@orphanation.org</a> </li>
                       </ul> <!-- /.header-contact  -->
                      
                    </div>

                    <div class="col-sm-6 col-xs-12 text-right">

                        <ul class="list-unstyled list-inline header-social">

                            <li> <a href="#"> <i class="fa fa-facebook"></i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-twitter"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa-google"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa-youtube"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa fa-pinterest-p"></i>  </a> </li>
                       </ul> <!-- /.header-social  -->
                        

                    </div>


                  </div>
              </div>

            </div>

            <div class="navbar-main">
              
              <div class="container" style="margin-right: 10px;">

                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                  </button>
                  
                  <a class="navbar-brand" href="index.html"><img src="assets/images/Orphanation.jpg" style="margin-left:-260px; height: 44px; width:180px;" ></a>
                  
                </div>

                <div id="navbar" class="navbar-collapse collapse pull-right">

                  <ul class="nav navbar-nav">

                    <li><a href="index.php" style="margin-left:15px;">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <!--<li><a href="causes.html">CAUSES</a></li>
                    <li><a href="gallery.html">GALLERY</a></li>-->
                    
                    <?php
                      if ($login_session_type=="admin"){

                      ?>
                        <li><a href="orphanage.php">ORPHANAGE</a></li>
                        <li><a href="history.php">HISTORY</a></li>
                        <li><a href="pending.php">PENDING</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                        <li class="has-child" style="margin-left: 100px;"><a href="#">MY ACCOUNT</a>

                      <ul class="submenu">
                          <li class="submenu-item" style="margin-bottom: 20px;"><a><b><?php echo $login_session; ?></a></b>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $login_session_id; ?></li>
                         <li class="submenu-item" style="margin-bottom: 20px;"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> &nbsp;&nbsp;Sign Out</a></li>
                      </ul>

                    </li>

                     <?php 
                      } 
                      else if ($login_session_type=="user"){

                      ?>
                        <li><a href="donate.php" class="is-active">DONATE</a></li>
                        <li><a href="user_history.php">HISTORY</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                        
                        <li class="has-child" style="margin-left: 100px;"><a href="#">MYACCOUNT</a>

                      <ul class="submenu">
                          <li class="submenu-item" style="margin-bottom: 20px;"><a><b><?php echo $login_session; ?></a></b>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $login_session_id; ?></li>
                         <li class="submenu-item" style="margin-bottom: 20px;"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> &nbsp;&nbsp;Sign Out</a></li>
                      </ul>

                    </li>

                     <?php 
                      } 
                      else if ($login_session_type=="mm"){

                      ?>
                        <li><a href="gallery.php">Orphanage</a></li>
                        <li><a href="contact.php">Items Donated</a></li>
                        <li><a href="contact.php">To Be Donated</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                        <li class="has-child" style="margin-left: 100px;"><a href="#">MYACCOUNT</a>

                      <ul class="submenu">
                          <li class="submenu-item" style="margin-bottom: 20px;"><a><b><?php echo $login_session; ?></a></b>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $login_session_id; ?></li>
                         <li class="submenu-item" style="margin-bottom: 20px;"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> &nbsp;&nbsp;Sign Out</a></li>
                      </ul>

                    </li>

                     <?php 
                      } 
                      else if ($login_session_type=="orphanage"){

                      ?>
                        <li><a href="gallery.php">My account</a></li>
                        <li><a href="contact.php">Orders</a></li>
                        <li><a href="contact.php">Cart</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                        <li class="has-child" style="margin-left: 100px;"><a href="#">MYACCOUNT</a>

                      <ul class="submenu">
                          <li class="submenu-item" style="margin-bottom: 20px;"><a><b><?php echo $login_session; ?></a></b>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $login_session_id; ?></li>
                         <li class="submenu-item" style="margin-bottom: 20px;"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> &nbsp;&nbsp;Sign Out</a></li>
                      </ul>

                    </li>

                     <?php 
                        } 
                        else
                            {
                    ?>
                       <li style="float:right !important; margin-left:300px; margin-right: 00px;"><a href="login.php" style="float:right !important; margin-right: 00px;">LOGIN</a></li>
                      </ul>
                    <?php
                        }
                    ?>
                    

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->                

              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->

<?php
$conn = new mysqli("127.0.0.1:3306","root","root@123","orphanation");
?>
<body>
  <br>
<h2 style="margin-top: 00px; margin-left: 10px;"><u><b>Donate Item</b></u></h2>
<br>
<br>
                <form method="POST" enctype="multipart/form-data">
                  <label style=" margin-left: 40px; margin-right: 20px;" >Upload Image:</label>
                  <input style="display: inline-block; margin-top: 1px;" class="file" type="file" placeholder="Upload Doc" name='upload_file' id='upload_file' required=""><br><br>

                  <div class="search-box" style="display: inline-block;">
                        <!-- <input type="search" name="search" class="form-control" placeholder="Search*" required onkeyup="myFunction()"> -->
                      <label id="i1" for="input_file" style="display:inline-block; margin-left: 50px; margin-bottom: -10px;" >Select Item:</label>
                      <input style="display: inline-block; margin-left: 25px; margin-top:-20px; width:300px;" type="text" name="inputVal"  autocomplete="off" placeholder="Search Items by name..." required="">
                      <div class="result"></div>
                  </div>  
                      <br>
                            <input type="submit" name="update_btn" value="Donate" style="margin-left: 90px; width: 70px; height: 33px; margin-top: 20px; " >

                  </form>
                
<br>
<br>
        </body>
        </html>
        <?php
      
            if(isset($_POST['update_btn'])){

                // $upload_file=$_POST['upload_file'];
                $item=$_POST['inputVal'];

                $item=explode('-', $item);
                $item_id=$item[0];
                $item_id = str_replace(' ', '', $item_id);

                $curr_date=date('Y-m-d');

                // Uploading Files to Folder
                      $file_name=$_FILES['upload_file']['name'];
                      $file_temp_loc=$_FILES['upload_file']['tmp_name'];
                      $file_store="uploads/".$file_name;
                      move_uploaded_file($file_temp_loc, $file_store);

                $sql="SELECT count(*) as no_orders from orphanation.orders";
                $result=$conn->query($sql);
                while($row=$result->fetch_assoc()){
                  $c=$row['no_orders'];
                }
    
                $c=sprintf("%04s",$c);
                $a='O'.$c;
              
                $sql="INSERT INTO orphanation.orders values('$a','$login_session_id','$item_id','$file_name','$curr_date',NULL,NULL,NULL,NULL,NULL,NULL)";
                if ($result=$conn->query($sql) == TRUE) {
                      echo "New Item Donated successfully";
                  } else {
                       echo "Error: " . $sql . "<br>" . $conn->error;
                  }
              }
              
              ?>

<!--if(isset($_POST['update_btn'])){
                $upload_file=$_POST['upload_file'];
                $item=$_POST['inputVal'];

                $item1=explode('-', $item);
                $item_id=$item1;

                // Uploading Files to Folder
                      $file_name=$_FILES['upload_file']['name'];
                      $file_temp_loc=$_FILES['upload_file']['tmp_name'];
                      $file_store="uploads/".$file_name;
                      move_uploaded_file($file_temp_loc, $file_store);

                $sql="SELECT count(*) as no_orders from orphanation.orders";
                $result=$conn->query($sql);
                while($row=$result->fetch_assoc()){
                  $c=$row['no_orders'];
                }
                echo "string".$c;
                $c=sprintf("%04s",$c);
                $a='o'.$c;
                echo "string".$a;
                $sql="INSERT INTO orphanation.orders values('$a','$login_session_id','$item_id','$file_name')"

          }
-->
    <!--  Scripts
    ================================================== -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>


    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

    <!-- Bootsrap javascript file -->
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!-- owl carouseljavascript file -->
    <script src="assets/js/owl.carousel.min.js"></script>

    <!-- Template main javascript -->
    <script src="assets/js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

    </body>
</html>
