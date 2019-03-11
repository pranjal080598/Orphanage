<?php
	//session_start();
	include('session.php');
	$database_name = "orphanation";
	$conn = mysqli_connect("127.0.0.1:3306","root","root@123",$database_name);
	if(isset($_POST["confirmorder"]))
	{
		echo '<script> alert("Order has been confirmed!") </script>';
		echo '<script> window.location = "confirmorder.php"</script>';
    foreach ($_SESSION["cart"] as $key =>$value) 
  {
      $o_id=$_SESSION["cart"][$key]['order_id'];
       $sql="UPDATE orders SET order_valid='2' WHERE order_id='$o_id'";
        $result=$conn->query($sql);
        $id=$login_session_id;
        $sql="UPDATE orders SET orphanage_id='$id' WHERE order_id='$o_id'";
        $result=$conn->query($sql);
        unset($_SESSION["cart"][$key]);
  }
	}
	if(isset($_POST["back"]))
	{
		echo '<script> window.location = "cart1.php"</script>';
	}

?>
<!DOCTYPE html>
<html>
<head>
<title>Orphanation</title>	
	<meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!-- cart-->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Zoom on images
	<link rel="stylesheet" href="component/payalord/xZoom/dist/xzoom.css">
	<script src="component/payalord/xZoom/dist/xzoom.min.js"></script-->

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  

	<!-- cart symbol -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>      

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
	@import url('https://fonts.googleapis.com/css?family=Titillium+Web');
	*{
		font-family: 'Titillium Web', sans-serif;
	}
	.title2
	{
			text-align: center;
			color: #66afe9;
			background-color: #efefef;
			padding: 2%;
	}
	h2
	{
			text-align: center;
			color: #66afe9;
			background-color: #efefef;
			padding: 2%;
	}
	table th,td
	{
			text-align: center;
			background-color: #efefef;
	}
	.button 
	{
		background-color: #008CBA;
    	border: none;
    	color: white;
    	padding: 10px 20px;
    	text-align: center;
    	text-decoration: none;
    	display: inline-block;
    	font-size: 17px;
    	margin: 4px 2px;
    	cursor: pointer;
	}
	</style>
</head>
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
                    <<li><a href="gallery.php">GALLERY</a></li>-->
                    <?php
                      if ($login_session_type=="admin"){

                      ?>
                        <li><a href="orphanage.php">ORPHANAGE</a></li>
                        <li><a href="history.php">HISTORY</a></li>
                        <li><a href="pending.php">PENDING</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
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
                        <!-- <li><a href="gallery.html">MY ACCOUNT</a></li> -->
                        <li><a href="cart1.php">PRODUCT</a></li>
                        <li><a href="cartview.php" class="is-active">CART</a></li>
                         <li><a href="orp_orders.php">ORDER</a></li>
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
<body style="margin-bottom: 20px;">
<div style="margin-top: 30px;">
	<div class="text-center">
	 <form method="post">
	    		<input type="submit" name= "back" value="Continue Purchasing" style="float:center; onclick="this.style.color='#000000'; this.style.backgroundColor = '#ffffff'" style="margin-top: 15px;" class="btn btn-success"" >
	 </form>
	</div>

</body>
</html>
  
	