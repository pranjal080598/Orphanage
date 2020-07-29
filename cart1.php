//cart code


<?php
	// ?session_start();
	include('session.php');
	$database_name = "orphanation";
	$conn = mysqli_connect("127.0.0.1:3306","root","root@123",$database_name);	
?>
<!DOCTYPE>
<html>
<head>
	<meta charset="UTF-8">
	 <title>Orphanation</title>
	<meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<!-- <title>Donation Cart</title> -->

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!-- cart-->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
          

	<!-- google fonts -->
	<style type="text/css">  
		@import url('https://fonts.googleapis.com/css?family=Titillium+Web');
		*{
			font-family: 'Titillium Web', sans-serif;
		}
		.orders{
			border: 1px solid #efefef;
			margin: 1px 19px 3px 1px; 
			padding: 13px;
			text-align: center;
			background-color: #efefef;

		}
 
		table,th,tr {
			text-align: center;
		}
		.title2{
			text-align: center;
			color: #66afe9;
			background-color: #efefef;
			padding: 2%;
		}
		h2{
			text-align: center;
			color: #66afe9;
			background-color: #efefef;
			padding: 2%;
		}
		table th{
			background-color: #efefef;
		}
		input
		{
			background-color: #efefef;
			text-align: center;
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
                        <li><a href="cart1.php" class="is-active">PRODUCT</a></li>
                        <li><a href="cartview.php">CART</a></li>
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
<div class="container" style="width: 70%">
	<!-- display cart symbol -->
	<!--<a href="cartview.php" class="btn btn-info btn-lg" style="float: right;">
          <span class="glyphicon glyphicon-shopping-cart"></span> Cart
    </a>-->
		<?php
		$query="SELECT * FROM orders where orphanage_id IS NULL AND order_valid='0' or order_valid='1'"; // to retrieve unbooked items
		$result=mysqli_query($conn,$query);

		
		//no of rows are > 0 then fetch all from table 
		if(mysqli_num_rows($result) > 0)
		{
			
			while($row=mysqli_fetch_array($result)) 
				{
					$item=$row['item_id'];
					$query1="SELECT item_name from items where item_id='$item'"; 
					$result1=mysqli_query($conn,$query1);
			 		$row1=mysqli_fetch_array($result1); 
	 
	?>
		
				<div class="col-md-3"> <!-- cols are used to diaplay items -->
				<form method="post" action="cartview.php?action=add&id=<?php echo $row['order_id']; ?>">
					<div class="orders">
					<!-- dynamic imgs of items should appear on page -->
					<img src="<?php echo 'uploads/'.$row['photo']; ?>" class="img-responsive" name="photo" height="10px">
					<!-- display item name -->
					<h5 class="text-info"> <?php $row1["item_name"]; ?> </h5>


					<input type="label" name="iname" readonly style="margin-top: 10px;" value="<?php echo $row1['item_name']; ?>"> 
					<input type="hidden" name="photo_id" style="margin-top: 10px;" value="<?php echo $row['photo']; ?>">
					<input type="hidden" name="o_id" style="margin-top: 10px;" value="<?php echo $row['order_id']; ?>">
					<!-- add to cart button -->
					<input type="submit" name="add" onclick="this.style.color='#000000';
					this.style.backgroundColor = '#ffffff'" style="margin-top: 15px;" class="btn btn-success" value="ADD TO CART"> 
					</div>
				</form>
				</div>
				<?php 
			}
		}
	?>
</div>
</body>
</html>
