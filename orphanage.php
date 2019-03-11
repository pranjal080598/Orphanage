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

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Owl carousel -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>

        <style type="text/css">
          body{
              font-family: Arail, sans-serif;
          }
          /* Formatting search box */
          .search-box{
              margin-left: 20px;
              width: 400px;
              position: relative;
              display: inline-block;
              font-size: 14px;
          }
          .search-box input[type="text"]{
              height: 32px;
              padding: 5px 10px;
              border: 1px solid #CCCCCC;
              font-size: 14px;
              background-color: #fff;
          }
          .result{
              position: absolute;        
              z-index: 999;
              top: 100%;
              left: 0;
          }
          .search-box input[type="text"], .result{
              width: 100%;
              box-sizing: border-box;
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
            /*padding: 10px 25px;*/
            border: 1px solid transparent;
           
          }

          .button:hover {
              /*background: #fff;*/
              /*color: #1f76bd;*/
              background: #1f76bd;
              color: #fff;
              border: 1px solid #1f76bd;
            }

          .img{
            height: 100px;
            width: 100px;
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
                      $.get("backend-search-orphanage.php", {term: inputVal}).done(function(data){
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
                  
                  <a class="navbar-brand" href="index.html"><img style="margin-left:-260px;margin-right:0px;" src="assets/images/Orphanation.jpg" alt=""></a>
                  
                </div>

                <div id="navbar" class="navbar-collapse collapse pull-right">

                  <ul class="nav navbar-nav">

                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <!--<li><a href="causes.php">CAUSES</a></li>
                    <li><a href="gallery.html">GALLERY</a></li>-->
                    <!-- <li><a href="contact.php">CONTACT</a></li> -->
                    <?php 
                    if ($login_session_type=="admin"){

                      ?>
                        <li><a href="orphanage.php" class ="is-active">ORPHANAGE</a></li>
                        <li><a href="history.php">HISTORY</a></li>
                        <li><a href="pending.php">PENDING</a></li>
                         <li><a href="contact.php">CONTACT</a></li>
                        <li class="has-child" style="margin-left: 130px;"><a href="#">MY ACCOUNT</a>

                      <ul class="submenu">
                          <li class="submenu-item" style="margin-bottom: 20px;"><a><b><?php echo $login_session; ?></a></b>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $login_session_id; ?></li>
                         <li class="submenu-item" style="margin-bottom: 20px;"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> &nbsp;&nbsp;Sign Out</a></li>
                      </ul>

                    </li>
                    </li>

                     <?php 
                      } 
                      else if ($login_session_type=="user"){

                      ?>
                        <li><a href="gallery.html">Donated</a></li>
                        <li><a href="contact.html">My Account</a></li>
                        <li><a href="contact.html">Orphanage</a></li>
                        <li class="has-child"><a class="is-active" href="#">CAUSES</a>

                      <ul class="submenu">
                         <li class="submenu-item" style="margin-bottom: 30px;"><a><?php echo $login_session; ?></a></li>
                         <li class="submenu-item"><a href="logout.php">LOGOUT</a></li>
                      </ul>

                    </li>

                     <?php 
                      } 
                      else if ($login_session_type=="mm"){

                      ?>
                        <li><a href="gallery.html">Orphanage</a></li>
                        <li><a href="contact.html">Items Donated</a></li>
                        <li><a href="contact.html">To Be Donated</a></li>
                        <li><a href="logout.php">Logout</a></li>

                     <?php 
                      } 
                      else if ($login_session_type=="orphanage"){

                      ?>
                        <li><a href="gallery.html">My account</a></li>
                        <li><a href="contact.html">Orders</a></li>
                        <li><a href="contact.html">Cart</a></li>
                        <li><a href="logout.php">Logout</a></li>

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


    <div class="col-md-12 fadeIn ">
          
            <h4><b><u>Pending Orphanage Details</u></b></h4><br>
            <table class="table table-style-1">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Orphanage Name</th>
                    <th>Owner</th>
                    <th>DOJ</th>
                    <th>Orphanage Id</th>
                    <th>Phone Number</th>
                  </tr>
                </thead>
                <tbody>

                    <?php
                        $sql="select * from orphanation.orphanage where approved_by IS NULL";
                        $result = $conn ->query($sql);
                          if($result->num_rows>0)
                          {
                            $no=1;
                            while ($row=$result->fetch_assoc()) {
                              # code...
                              echo "<tr><th scope='row'>".$no."</th><td><a href='orphan_info.php?id=".$row['orphanage_id']."'>".$row["orphanage_name"]."</td><td>".$row["orphanage_owner"]."</td><td>".$row["orphanage_doj"]."</td><td>".$row["orphanage_id"]."</td><td>".$row["orphanage_phone"]."</td>";
                              echo "</tr>";
                              $no=$no+1;
                            }
                          }
                          else{
                            echo "No rows TO display";
                          }

                    ?>
                </tbody>
      </table>
  </div>



<?php
$conn = new mysqli("127.0.0.1:3306","root","root@123","orphanation");
?>


    <div class="col-md-12 fadeIn ">
          
            <h4><b><u>Orphanage Details</u></b></h4>
            <form action="" method="post">
                            <div class="search-box">
                              <!-- <input type="search" name="search" class="form-control" placeholder="Search*" required onkeyup="myFunction()"> -->
                               <input name="inputVal" type="text" autocomplete="off" placeholder="Search orphanage by name..."></input>

                                <div class="result"></div>
                            </div>  
                            <button  name="search_btn" type="submit" class="button" style="height: 33px; margin-left: 0px;"><i class="fa fa-search"></i></button>
                </form>
                <br>
            
            <table class="table table-style-1">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Orphanage Name</th>
                    <th>Owner</th>
                    <th>Approved By</th>
                    <th>DOJ</th>
                    <th>Orphanage Id</th>
                    <th>Phone Number</th>
                  </tr>
                </thead>
                <tbody>

                    <?php
                    if(!isset($_POST["search_btn"]))
                    {
                        $sql="select * from orphanation.orphanage where approved_by!='NULL'";
                        $result = $conn ->query($sql);
                          if($result->num_rows>0)
                          {
                            $no=1;
                            while ($row=$result->fetch_assoc()) {
                              # code...
                              $id=$row["approved_by"];
                              $sql1="select * from orphanation.admin where admin_id=$id";
                              $result1= $conn ->query($sql1);
                              $row1=$result1->fetch_assoc();
                              echo "<tr><th scope='row'>".$no."</th><td><a href='approved_orphan_info.php?id=".$row['orphanage_id']."'>".$row["orphanage_name"]."</td><td>".$row["orphanage_owner"]."</td><td>".$row1["admin_name"]."</td><td>".$row["orphanage_doj"]."</td><td>".$row["orphanage_id"]."</td><td>".$row["orphanage_phone"]."</td>";
                              echo "</tr>";
                              $no=$no+1;
                            }
                          }
                          else{
                            echo "No rows TO display";
                          }
                    }
                    else if(isset($_POST["search_btn"]))
                    {
                              $orphanage_details=$_POST["inputVal"];
                              if($orphanage_details!=null)
                              { 
                                  $orphanage=explode('-', $orphanage_details);
                                  $orphanage_id=$orphanage[0];
                                  $orphanage_name=$orphanage[1];
                                  $orphanage_id = str_replace(' ', '', $orphanage_id);
                                  // echo "Id".$orphanage_id; // piece1
                                  // echo "Name".$orphanage_name; // piece2
                                  $conn = new mysqli("127.0.0.1:3306","root","root@123","orphanation");
                                  $sql="select * from orphanation.orphanage where orphanage_id='$orphanage_id' and approved_by!='NULL'";
                                  $result = $conn ->query($sql);
                                  if($result->num_rows>0)
                                  {
                                    $no=1;
                                    while ($row=$result->fetch_assoc()) {
                                          $id=$row["approved_by"];
                                          // echo "Id".$id;
                                          $sql1="select * from orphanation.admin where admin_id=$id";
                                          $result1= $conn ->query($sql1);
                                          $row1=$result1->fetch_assoc();
                                          echo "<tr><th scope='row'>".$no."</th><td>"."".$row["orphanage_name"]."</td><td>".$row["orphanage_owner"]."</td><td>".$row1["admin_name"]."</td><td>".$row["orphanage_doj"]."</td><td>".$row["orphanage_id"]."</td><td>".$row["orphanage_phone"]."</td><td><img style='height:30px; width=100 px;' src='uploads/".$row["upload_file"]."'></td>";
                                          echo "</tr>";
                                          $no=$no+1;
                                    }
                                  }
                                }
                                else{
                                  $sql="select * from orphanation.orphanage where approved_by!='NULL'";
                        $result = $conn ->query($sql);
                          if($result->num_rows>0)
                          {
                            $no=1;
                            while ($row=$result->fetch_assoc()) {
                              # code...
                              $id=$row["approved_by"];
                              $sql1="select * from orphanation.admin where admin_id=$id";
                              $result1= $conn ->query($sql1);
                              $row1=$result1->fetch_assoc();
                              echo "<tr><th scope='row'>".$no."</th><td>"."".$row["orphanage_name"]."</td><td>".$row["orphanage_owner"]."</td><td>".$row1["admin_name"]."</td><td>".$row["orphanage_doj"]."</td><td>".$row["orphanage_id"]."</td><td>".$row["orphanage_phone"]."</td><td><img style='height:30px; width=120px;' src='uploads/".$row["upload_file"]."'id='".$row["orphanage_id"]."'></td>";
                              // "'id='".$row["upload_file"]."'></td>"
                              echo "</tr>";
                              $no=$no+1;
                            }
                          }
                          else{
                            echo "No rows TO display";
                          }

                                }
                        }

                    ?>
                </tbody>
      </table>
          </div>

<!-- class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" -->
          <center>
        </body>
        </html>

    




    <!--  Scripts
    ================================================== -->

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
