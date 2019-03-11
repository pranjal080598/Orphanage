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
                  
                  <a class="navbar-brand" href="index.html"><img style="margin-left:-260px;margin-right: 50px;" src="assets/images/Orphanation.jpg" alt=""></a>
                  
                </div>

                <div id="navbar" class="navbar-collapse collapse pull-right">

                  <ul class="nav navbar-nav">

                    <li><a href="index.php" style="margin-left:15px;">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <!--<li><a href="causes.html">CAUSES</a></li>
                    <li><a href="gallery.html">GALLERY</a></li>-->
                    

                     <?php 
                       if ($login_session_type=="mm"){

                      ?>
                        
                        <li><a href="mm_first.php" class="is-active">ITEMS TO BE DELIVERED</a></li>
                        <li><a href="mm_second.php">TO BE COLLECTED</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                        <li class="has-child" style="margin-left: 100px;"><a href="#">MYACCOUNT</a>

                      <ul class="submenu">
                          <li class="submenu-item" style="margin-bottom: 20px;"><a><b><?php echo $login_session; ?></a></b>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $login_session_id; ?></li>
                         <li class="submenu-item" style="margin-bottom: 20px;"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> &nbsp;&nbsp;Sign Out</a></li>
                      </ul>

                    </li>
                       <?php
                      } ?>
                </div> <!-- /#navbar -->

              </div> <!-- /.container -->                

              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->

    <?php
      $servername= "127.0.0.1:3306";
      $username="root";
      $password="root@123";
      $dbname="orphanation";

      $conn=new mysqli($servername,$username,$password,$dbname);
      

          
    ?>
    <div class="col-md-12 fadeIn ">
          
            <h4>Order Details</h4>
            <table class="table table-style-1">
                <thead>
                  <tr>
                    <th><input type='checkbox'  value='1' name='checkbox[]' /></th>
                    

                    <th>Order Id</th>
                    <th>User Id</th>
                    <th>Item ID</th>
                    <th>Photo</th>
                    <th>Upload_date</th>
                    <th>MM_ID 1</th>
                    <th>Orphanage_id</th>
                    
                                       
                  </tr>

                </thead>
                <tbody>
              <form method="post">
              <?php
              $conn=new mysqli($servername,$username,$password,$dbname);
                 $sql="select * from orphanation.orders where mm_id2 ='$login_session_id' and mm_id1 IS NOT NULL";
                 $result=$conn->query($sql);
                 if($result->num_rows>0) 
                 {
                            $no=1;

                      while($row=$result->fetch_assoc())
                      {
                            $var=$row['order_id']; 
                            echo "<tr><th scope='row'>";
                              
                              echo "<input type='checkbox' name='checkbox[]' value='" .$var;
                              echo "'/></th>
                               
                                <td>".$row["order_id"]."</td>
                                <td>".$row["user_id"]."</td>
                                <td>".$row["item_id"]."</td>
                                <td>".$row["photo"]."</td>

                                <td>".$row["upload_date"]."</td>
                                <td>".$row["mm_id1"]."</td>
                                <td>".$row["orphanage_id"]."</td>";
                              echo "</tr>";                
                              $no=$no+1;      
                      }
                  
                  }
                else{
                         echo "No rows";
                    }

              ?>
                </tbody>
            </table>
  </div>
  <div>
    <!-- <button type="Submit" onclick="location.href='mmonbutton.php'" >Submit</button> -->
  </div>



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
