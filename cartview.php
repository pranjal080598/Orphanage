<?php
	//session_start();
	include('session.php');
	$database_name = "orphanation";
	$conn = mysqli_connect("127.0.0.1:3306","root","root@123",$database_name);
	//SESSION
	if(isset($_POST["add"]))
	{
		if(isset($_SESSION["cart"]))
		{
			$item_array_id = array_column($_SESSION["cart"],'item_id');
			if(!in_array($_GET["id"], $item_array_id)) // check if  not exists then add  
			{
				$count1= count($_SESSION["cart"]);
				$item_array= array(
						'item_id' => $_GET["id"],
						'item_name' => $_POST["iname"],
						'order_id' => $_POST["o_id"],
						'photo' => $_POST["photo_id"]
				);
				$o_id=$_POST["o_id"];
				$_SESSION['var_name']=$o_id;
				$_SESSION["cart"][$count1]=$item_array;
				$sql="UPDATE orphanation.orders SET order_valid='1' WHERE order_id='$o_id'";
				$result=$conn->query($sql);
				echo '<script>alert("Product Added To Cart") </script>';// product added to cart
				echo '<script> window.location = "cart1.php"</script>'; //javascript
			}
			else // if already present in cart
			{
				echo '<script>alert("Product Already Present In Cart Cart") </script>';
				echo '<script> window.location = "cart1.php"</script>';
			}
		}
		else // if cart session is not set
		{
			$item_array= array(
						'item_id' => $_GET["id"],
						'item_name' => $_POST["iname"],
						'order_id' => $_POST["o_id"],
						'photo' => $_POST["photo_id"]
			);
			$_SESSION["cart"][0]=$item_array;
		}
	}
	if(isset($_GET["action"])) // if user removes item
	{
		if($_GET["action"]=="delete")
		{
			foreach ($_SESSION["cart"] as $key => $value) //unique values ie. id
			{
				if($value["item_id"]==$_GET["id"])
				{
					$o_id=$value["order_id"];
					$sql="UPDATE orphanation.orders SET order_valid='0' WHERE order_id='$o_id'";
					$result=$conn->query($sql);
					unset($_SESSION["cart"][$key]);
					echo '<script>alert("Product Removed from cart") </script>';// product removed
					echo '<script> window.location = "cartview.php"</script>';
				}
			}
		}
	}
	//$query="select *from orders ";
	/*if(isset($_POST["confirmorder"]))
	{
		<input type='hidden' name='input_name' value='<?php serialize($item_array); ?>' />
		echo '<script> window.location = "confirmorder.php"</script>';
	}*/
	if(isset($_POST["continue"]))
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
			background-color: #ffffff;
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
<div class="container" style="width: 70%">
<div style="clear: both">
	
	<!-- details of items -->

	<div class="table table-responsive">
		
	    <?php

	    	if(!empty($_SESSION["cart"]))
	    	{
	    ?>
	    	<table class="table table-bordered">
			<tr>
				<th width="50%"> Product Name </th>
				<th width="50%"> Remove Product </th>
			</tr>
		<?php 
	    		foreach ($_SESSION["cart"] as $key => $value) 
	    		{
	    ?>
	    
		
	    		<tr>
	    			<b><td><?php echo $value["item_name"]; ?></b>
	    				<br>
	    				<br>
	    			<center> <img src="<?php echo "uploads/".$value['photo']; ?>" class="img-responsive" height="10px"> </center>
	    		
	    			</td>
	    			<!-- remove item from cart if not wanted-->
	    			<td><a href="cartview.php?action=delete&id=<?php echo $value["item_id"]; ?>"><span class="text-danger"> Remove Product </span> </a></td>
	    		</tr>
	    		<?php
	    		}	
	    		?>
	    		</table>

	    		<form method="post" action="confirmorder.php?action=confirmorder&id=<?php echo $value['order_id']; ?>">

	    		<input type="hidden" name="oarray" style="margin-top: 10px;" value="<?php echo $item_array; ?>">

	    		<input type="submit" name= "confirmorder" value="Confirm Order" style="float:right; onclick="this.style.color='#000000'; this.style.backgroundColor = '#ffffff'" style="margin-top: 15px;" class="btn btn-success"" >
	    		</form>
	    	</div>
  	</div>
</div>
	    	<?php
	    	}

	    	else
	    	{
	    	?>
	    		<div class="text-center">
                <h3 class="mini-cart-empty fontsize18 no-margin-btm">
                         Your Cart Is Empty.
               </h3>

               <form method="post">
	    		<input type="submit" name= "continue" value="Continue" style="float:center; onclick="this.style.color='#000000'; this.style.backgroundColor = '#ffffff'" style="margin-top: 15px;" class="btn btn-success"" >
	    		</form>
    			</div>
    		<?php  
	    	}

	    	?>
	    	
	    	
	  			
	
</body>
</html>