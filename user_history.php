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
              margin-left: 40px;
              width: 400px;
              position: relative;
              display: inline-block;
              font-size: 14px;
              margin-bottom: 20px;
              margin-top: 10px;
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
      </style>
      <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
      <script type="text/javascript">
          $(document).ready(function(){
              $('.search-box input[type="text"]').on("keyup input", function(){
                  /* Get input value on change */
                  var inputVal = $(this).val();
                  var resultDropdown = $(this).siblings(".result");
                  if(inputVal.length){
                      $.get("backend-search-user_history.php", {term: inputVal}).done(function(data){
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
                    <!--<li><a href="causes.php">CAUSES</a></li>
                    <<li><a href="gallery.html">GALLERY</a></li>-->
                   
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
                        <li><a href="donate.php">DONATE</a></li>
                        <li><a href="user_history.php" class="is-active">HISTORY</a></li>
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
                        <li><a href="gallery.html">Orphanage</a></li>
                        <li><a href="contact.html">Items Donated</a></li>
                        <li><a href="contact.html">To Be Donated</a></li>
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
                        <li><a href="gallery.html">My account</a></li>
                        <li><a href="contact.html">Orders</a></li>
                        <li><a href="contact.html">Cart</a></li>
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

<br>

      <div class="col-md-12 fadeIn ">
            <h4><b>Pending Donation Details</b></h4>
            <table class="table table-style-1" id="mytable">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Order Id</th>
                    <th>Item Name</th>
                    <th>Orphanage Name</th>
                    <th>Upload Date</th>
                    <th>Assorting Middle Man</th>
                  </tr>
                </thead>
                <tbody>

                    <?php 
                        $sql="select * from orphanation.orders where user_id='$login_session_id' AND mm_id1 IS NOT NULL AND orphanage_id IS NULL";
                        $result = $conn ->query($sql);
                          if($result->num_rows>0)
                          {
                            $no=1;
                            while ($row=$result->fetch_assoc()) {
                              # code...
                              $var=$row['item_id'];
                              $sql2="select * from orphanation.items where item_id='{$var}'";
                              $result2 = $conn ->query($sql2);
                              $row2=$result2->fetch_assoc();

                              $var=$row['mm_id1'];
                              $sql4="select * from orphanation.middle_man where mm_id='{$var}'";
                              $result4 = $conn ->query($sql4);
                              $row4=$result4->fetch_assoc();

                              $var=$row['orphanage_id'];
                              $sql3="select * from orphanation.orphanage where orphanage_id='{$var}'";
                              $result3 = $conn ->query($sql3);
                              $row3=$result3->fetch_assoc();

                              $var=$row['order_id'];
                              echo "<tr><th scope='row'>".$no."</th><td><a href='orphan_info.php?id=".$var."'>".$var."</td></a><td>".$row2["item_name"]."</td><td>".$row3['orphanage_name']."</td><td>".$row['upload_date']."</td><td>".$row4["mm_name"]."</td>";
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

      <div class="col-md-12 fadeIn ">
            <h4><b>Uploaded Item Details</b></h4>
            <table class="table table-style-1" id="mytable">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Order Id</th>
                    <th>Item Name</th>
                    <th>Upload Date</th>
                  </tr>
                </thead>
                <tbody>

                    <?php 
                        $sql="select * from orphanation.orders where user_id='$login_session_id' AND mm_id1 IS NOT NULL AND orphanage_id IS NULL";
                        $result = $conn ->query($sql);
                          if($result->num_rows>0)
                          {
                            $no=1;
                            while ($row=$result->fetch_assoc()) {
                              # code...
                              $var=$row['item_id'];
                              $sql2="select * from orphanation.items where item_id='{$var}'";
                              $result2 = $conn ->query($sql2);
                              $row2=$result2->fetch_assoc();

                              $var=$row['order_id'];
                              echo "<tr><th scope='row'>".$no."</th><td><a href='orphan_info.php?id=".$var."'>".$var."</td></a><td>".$row2["item_name"]."</td><td>".$row['upload_date']."</td>";
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


  

    <div class="col-md-12 fadeIn ">
            <h4><b>Donation Details</b></h4>

            <form action="" method="post">
                            <div class="search-box">
                              <!-- <input type="search" name="search" class="form-control" placeholder="Search*" required onkeyup="myFunction()"> -->
                               <input name="inputVal" type="text" autocomplete="off" placeholder="Search item by name..."></input>

                                <div class="result"></div>
                            </div>  
                            <button  name="search_btn" type="submit" class="button" style="height: 33px; margin-left: 0px;"><i class="fa fa-search"></i></button>
                </form>
            <table class="table table-style-1" id="mytable">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Order Id</th>
                    <th>Item Name</th>
                    <th>Orphanage Name</th>
                    <th>Upload Date</th>
                    <th>Order Date</th>
                    <th>Assorting Middle Man</th>
                    <th>Delivery Middle man </th>
                  </tr>
                </thead>
                <tbody>

                    <?php
                      if (!isset($_POST["search_btn"]))
                      { 
                        $sql="select * from orphanation.orders where user_id='$login_session_id' AND mm_id2 IS NOT NULL AND orphanage_id IS NOT NULL";
                        $result = $conn ->query($sql);
                          if($result->num_rows>0)
                          {
                            $no=1;
                            while ($row=$result->fetch_assoc()) {
                              # code...
                              $var=$row['item_id'];
                              $sql2="select * from orphanation.items where item_id='{$var}'";
                              $result2 = $conn ->query($sql2);
                              $row2=$result2->fetch_assoc();

                              $var=$row['orphanage_id'];
                              $sql3="select * from orphanation.orphanage where orphanage_id='{$var}'";
                              $result3 = $conn ->query($sql3);
                              $row3=$result3->fetch_assoc();

                              $var=$row['mm_id1'];
                              $sql4="select * from orphanation.middle_man where mm_id='{$var}'";
                              $result4 = $conn ->query($sql4);
                              $row4=$result4->fetch_assoc();

                              $var=$row['mm_id2'];
                              $sql5="select * from orphanation.middle_man where mm_id='{$var}'";
                              $result5 = $conn ->query($sql5);
                              $row5=$result5->fetch_assoc();

                              $var=$row['order_id'];
                              echo "<tr><th scope='row'>".$no."</th><td><a href='orphan_info.php?id=".$var."'>".$var."</td></a><td>".$row2["item_name"]."</td><td>".$row3["orphanage_name"]."</td><td>".$row['upload_date']."</td><td>".$row["order_date"]."</td><td>".$row4["mm_name"]."</td><td>".$row5["mm_name"]."</td>";
                              echo "</tr>";
                              $no=$no+1;
                            }
                          }
                          else{
                            echo "No rows TO display";
                          }
                    }

                        if (isset($_POST["search_btn"]))
                        { 
                          $orphanage_details=$_POST["inputVal"];
                          // echo "string".$orphanage_details;
                          if($orphanage_details!=null)
                          {
                              $orphanage=explode('-', $orphanage_details);
                              $id1=$orphanage[0];
                              $item_name=$orphanage[1];
                              $id1 = str_replace(' ', '', $id1);
                              // echo "Id".$id1; // piece1
                              // echo "Name".$orphanage_name; // piece2

                              $conn = new mysqli("127.0.0.1:3306","root","root@123","orphanation");
                              $sql="select * from orphanation.orders where user_id='$login_session_id' AND  mm_id2 IS Not null AND item_id='$id1'"; 
                              $result=$conn->query($sql);
                              // echo "result".$result->num_rows;
                              if($result)
                              {
                                    $no=1;
                                    while ($row=$result->fetch_assoc()) {
                                      # code...
                                        $var=$row['user_id'];
                                        $sql1="select * from orphanation.users where user_id='{$var}'";
                                        $result1 = $conn ->query($sql1);
                                        $row1=$result1->fetch_assoc();

                                        $var=$row['item_id'];
                                        $sql2="select * from orphanation.items where item_id='{$var}'";
                                        $result2 = $conn ->query($sql2);
                                        $row2=$result2->fetch_assoc();

                                        $var=$row['orphanage_id'];
                                        $sql3="select * from orphanation.orphanage where orphanage_id='{$var}'";
                                        $result3 = $conn ->query($sql3);
                                        $row3=$result3->fetch_assoc();

                                        $var=$row['mm_id1'];
                                        $sql4="select * from orphanation.middle_man where mm_id='{$var}'";
                                        $result4 = $conn ->query($sql4);
                                        $row4=$result4->fetch_assoc();

                                        $var=$row['mm_id2'];
                                        $sql5="select * from orphanation.middle_man where mm_id='{$var}'";
                                        $result5 = $conn ->query($sql5);
                                        $row5=$result5->fetch_assoc();

                                        $var=$row['order_id'];
                                        echo "<tr><th scope='row'>".$no."</th><td><a href='orphan_info.php?id=".$var."'>".$var."</td></a><td>".$row2["item_name"]."</td><td>".$row3["orphanage_name"]."</td><td>".$row['upload_date']."</td><td>".$row["order_date"]."</td><td>".$row4["mm_name"]."</td><td>".$row5["mm_name"]."</td>";
                                        echo "</tr>";
                                        $no=$no+1;
                                    }
                              }
                              else{
                                echo "No rows TO display";
                              }
                          }
                          else{
                                $sql="select * from orphanation.orders where user_id='$login_session_id' AND mm_id2 IS NOT NULL and item_id IS NOT NULL";
                            $result = $conn ->query($sql);
                              if($result->num_rows>0)
                              {
                                $no=1;
                                while ($row=$result->fetch_assoc()) {
                                  # code...
                                  $var=$row['user_id'];
                                  $sql1="select * from orphanation.users where user_id='{$var}'";
                                  $result1 = $conn ->query($sql1);
                                  $row1=$result1->fetch_assoc();

                                  $var=$row['item_id'];
                                  $sql2="select * from orphanation.items where item_id='{$var}'";
                                  $result2 = $conn ->query($sql2);
                                  $row2=$result2->fetch_assoc();

                                  $var=$row['orphanage_id'];
                                  $sql3="select * from orphanation.orphanage where orphanage_id='{$var}'";
                                  $result3 = $conn ->query($sql3);
                                  $row3=$result3->fetch_assoc();

                                  $var=$row['mm_id1'];
                                  $sql4="select * from orphanation.middle_man where mm_id='{$var}'";
                                  $result4 = $conn ->query($sql4);
                                  $row4=$result4->fetch_assoc();

                                  $var=$row['mm_id2'];
                                  $sql5="select * from orphanation.middle_man where mm_id='{$var}'";
                                  $result5 = $conn ->query($sql5);
                                  $row5=$result5->fetch_assoc();

                                 $var=$row['order_id'];
                                  echo "<tr><th scope='row'>".$no."</th><td><a href='orphan_info.php?id=".$var."'>".$var."</td></a><td>".$row2["item_name"]."</td><td>".$row3["orphanage_name"]."</td><td>".$row['upload_date']."</td><td>".$row["order_date"]."</td><td>".$row4["mm_name"]."</td><td>".$row5["mm_name"]."</td>";
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





<?php
$conn = new mysqli("127.0.0.1:3306","root","root@123","orphanation");
?>
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
