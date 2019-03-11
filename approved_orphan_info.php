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

        
<style>
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    /*position: absolute;*/
    margin-top: 00px;
    margin-right: 50px;
    top: 20px;
    right:10px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!------ BOOT STRAP CORE JAVASCRIPT ---------->
  <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   

body {
  font-family: 'open sans';
  overflow-x: hidden; }

img {
  max-width: 100%; }

.preview {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }
  @media screen and (max-width: 996px) {
    .preview {
      margin-bottom: 20px; } }

.preview-pic {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.preview-thumbnail.nav-tabs {
  border: none;
  margin-top: 15px; }
  .preview-thumbnail.nav-tabs li {
    width: 18%;
    margin-right: 2.5%; }
    .preview-thumbnail.nav-tabs li img {
      max-width: 100%;
      display: block; }
    .preview-thumbnail.nav-tabs li a {
      padding: 0;
      margin: 0; }
    .preview-thumbnail.nav-tabs li:last-of-type {
      margin-right: 0; }

.tab-content {
  overflow: hidden; }
  .tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
            animation-name: opacity;
    -webkit-animation-duration: .3s;
            animation-duration: .3s; }

.card {
  margin-top: 50px;
  background: #eee;
  padding: 3em;
  line-height: 1.5em; }

@media screen and (min-width: 997px) {
  .wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex; } }

.details {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }

.colors {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.product-title, .price, .sizes, .colors {
  text-transform: UPPERCASE;
  font-weight: bold; }

.checked, .price span {
  color: #ff9f1a; }

.product-title, .rating, .product-description, .price, .vote, .sizes {
  margin-bottom: 15px; }

.product-title {
  margin-top: 0; }

.size {
  margin-right: 10px; }
  .size:first-of-type {
    margin-left: 40px; }

.color {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  height: 2em;
  width: 2em;
  border-radius: 2px; }
  .color:first-of-type {
    margin-left: 20px; }

.add-to-cart, .like {
  background: #ff9f1a;
  padding: 1.2em 1.5em;
  border: none;
  text-transform: UPPERCASE;
  font-weight: bold;
  color: #fff;
  -webkit-transition: background .3s ease;
          transition: background .3s ease; }
  .add-to-cart:hover, .like:hover {
    background: #b36800;
    color: #fff; }

.not-available {
  text-align: center;
  line-height: 2em; }
  .not-available:before {
    font-family: fontawesome;
    content: "\f00d";
    color: #fff; }

.orange {
  background: #ff9f1a; }

.green {
  background: #85ad00; }

.blue {
  background: #0076ad; }

.tooltip-inner {
  padding: 1.3em; }

@-webkit-keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

@keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }
          </style>

</style>
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
                  
                <a class="navbar-brand" href="index.html"><img src="assets/images/Orphanation.jpg" style="margin-left:-280px; height: 45px; width:480px;" ></a>
                  
                </div>

                <div id="navbar" class="navbar-collapse collapse pull-right">

                 <ul class="nav navbar-nav">

                    <li><a href="index.html" style="margin-left:15px;">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <!-- <li><a href="causes.html">CAUSES</a></li> -->
                    <!--<li><a href="gallery.html">GALLERY</a></li>
                    <li><a href="contact.html">CONTACT</a></li>-->
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
        $id="";
        $conn = new mysqli("127.0.0.1:3306","root","root@123","orphanation");
        $id=$_GET['id'];
        $sql="select * from orphanation.orphanage where orphanage_id='{$id}'";
        $result = $conn ->query($sql)or die($conn->error);
        $_SESSION['login_used']=$id;
        $row=$result->fetch_assoc();
?>

<div style="margin-left: 10px;">
      <div style="font-family: 'fantasy' font-style:''normal">
      <h2><u><b><?php echo $row['orphanage_name'];?></b></u></h2>
    </div>

    <div class="container">
    <div class="card" style="background-color: LightGray; width: 900px;  margin-left :110px; height: 400px;">
      <div class="container-fliud">
        <div class="wrapper row">
          <div class="preview col-md-6">
            
            <?php $upfile=$row['upload_file'];?>
            <div class="preview-pic tab-content">
              <div class="tab-pane active" id="pic-1"><img src="uploads/<?php echo $row['upload_file'];?>" id="myImg" style="width: 300px; height: 300px;"/></div>
            </div>
           
          </div>
          <div class="details col-md-6" style="padding-left: 1px; width: 500px;">
            <h3 class="product-title" style=" margin-left:-40px; color:black"><b>Name:  <?php echo $row['orphanage_name'];?></b></h3><br>
             <h5 class="sizes" style="color:black; margin-bottom:14px;">ID:    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['orphanage_id'];?></h5>
             <h5 class="sizes" style="color:black; margin-bottom:14px;">Approved By:    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['approved_by'];?></h5>
             <h5 class="sizes" style="color:black">Owner:    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['orphanage_owner'];?></h5>
            <!-- <div class="rating"></div> -->
            
            <h5 class="price" style="color:black">Address:    &nbsp;&nbsp;<?php echo $row['orphanage_address'];?></h5>
            <h5 class="sizes" style="color:black">Phone Number:    &nbsp;&nbsp;<?php echo $row['orphanage_phone'];?></h5>
            <h5 class="sizes" style="color:black">Date Of Enrollement:     <?php echo $row['orphanage_doj'];?></h5>
          </div>
        </div>
            </form>
            
            </div>
      </div>
    </div>
  </div>
  </div>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<!-- class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" -->
          <center>
  <script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById('myImg');
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() { 
        modal.style.display = "none";
    }
    </script>

          <?php
          if (isset($_GET["search"]))
          {
            $conn = new mysqli("localhost","root","root@123","orphanation");
            echo "Seesion Id".$login_session_id; 
            echo "Seesion Id".$row['orphanage_id']; 
            // $sql="update orphanation.orphanage set approved_by='$login_session_id' where orphanage_id=$row['orphanage_id']";
            if ($conn->query($sql) === TRUE) {
                  echo "New record created successfully";
              }
          }
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
