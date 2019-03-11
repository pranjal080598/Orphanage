<?php
include('session.php');
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Contact </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>


    </head>
    <body>
    <!-- NAVBAR
    ================================================== -->

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
                    <li><a href="about.php" >ABOUT</a></li>
                    <!--<li><a href="causes.php">CAUSES</a></li>
                    <li><a href="gallery.html">GALLERY</a></li>-->
                    <?php
                      if ($login_session_type=="admin"){

                      ?>
                        <li><a href="orphanage.php">ORPHANAGE</a></li>
                        <li><a href="history.php">HISTORY</a></li>
                        <li><a href="pending.php">PENDING</a></li>
                         <li><a href="contact.php" class="is-active" >CONTACT</a></li>
                        <li class="has-child" style="margin-left: 140px;"><a href="#">MY ACCOUNT</a>

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
                        <li><a href="user_history.php">HISTORY</a></li>
                        <li><a href="contact.php" class="is-active" >CONTACT</a></li>
                        
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
                        <li><a href="mm_first.php">ITEMS TO BE DELIVERED</a></li>
                        <li><a href="mm_second.php" >TO BE COLLECTED</a></li>
                        <li><a href="contact.php" class="is-active">CONTACT</a></li>
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
                        <!-- <li><a href="gallery.html">MY ACCOUNT</a></li> -->
                        <li><a href="cart1.php">PRODUCT</a></li>
                        <li><a href="cartview.php">CART</a></li>
                         <li><a href="orp_orders.php">ORDER</a></li>
                        <li><a href="contact.php" class="is-active">CONTACT</a></li>

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


  <div class="page-heading text-center">

    <div class="container zoomIn animated">
      
      <h1 class="page-title">CONTACT US <span class="title-under"></span></h1>
      <p class="page-description">
        Any help or donation no matter how small, will be deeply appreciated and is much needed.
      </p>
      
    </div>

  </div>

  <div class="main-container fadeIn animated">

    <div class="container">

      <div class="row">

        <div class="col-md-7 col-sm-12 col-form">

          <h2 class="title-style-2">CONTACT FORM <span class="title-under"></span></h2>

          <form action="php/mail.php" class="contact-form ajax-form">

            <div class="row">

              <div class="form-group col-md-6">
                              <input type="text" name="name" class="form-control" placeholder="Name*" required>
                          </div>

                           <div class="form-group col-md-6">
                              <input type="email" name="email" class="form-control" placeholder="E-mail*" required>
                          </div>
              
            </div>

                        <div class="form-group">
                            <textarea name="message" rows="5" class="form-control" placeholder="Message*" required></textarea>
                        </div>

                        <div class="form-group alerts">
                        
                          <div class="alert alert-success" role="alert">
                
              </div>

              <div class="alert alert-danger" role="alert">
                
              </div>
              
                        </div>  

                         <div class="form-group">
                            <button type="submit" class="btn btn-primary pull-right">Send message</button>
                        </div>

                        <div class="clearfix"></div>

          </form>

        </div>

        <div class="col-md-4 col-md-offset-1 col-contact">

          <h2 class="title-style-2">ORPHANATION <span class="title-under"></span></h2>
          <p>
            <b>Orphanation</b> is an attempt for a better India.
          </p>

          <div class="contact-items">

            <ul class="list-unstyled contact-items-list">
              <li class="contact-item"> <span class="contact-icon"> <i class="fa fa-map-marker"></i></span> Mumbai, India</li>
              <li class="contact-item"> <span class="contact-icon"> <i class="fa fa-phone"></i></span> 022 28722876</li>

              <li class="contact-item"> <span class="contact-icon"> <i class="fa fa-envelope"></i></span>contact@orphanation.org</li>
            </ul>
          </div>

          
          
        </div>

      </div> <!-- /.row -->


    </div>
    


  </div>
    <footer>
        <div class="footer-bottom">
          <div class="container text-right" style="color: #fff">
                Orphanation @ copyrights 2015 - by <a href="http://www.ouarmedia.com" target="_blank">Orphanation</a>
            </div>
        </div>
        
    </footer> <!-- main-footer -->

         
        
        <!-- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

        <!-- Bootsrap javascript file -->
        <script src="assets/js/bootstrap.min.js"></script>


        


        <!-- Template main javascript -->
        <script src="assets/js/main.js"></script>

        
    </body>
</html>
