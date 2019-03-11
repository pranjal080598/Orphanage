<?php
	// ?session_start();
	$database_name = "orphanation";
	$conn = mysqli_connect("127.0.0.1:3306","root","root@123",$database_name);	
?>

<!DOCTYPE>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<title>Donation Cart</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!-- cart-->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- cart symbol -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>                

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
<body>
<div class="container" style="width: 70%">
	<!-- display cart symbol -->
	<a href="cartview.php" class="btn btn-info btn-lg" style="float: right;">
          <span class="glyphicon glyphicon-shopping-cart"></span> Cart
    </a>
		<?php
		$query="SELECT * FROM orders where orphanage_id IS NULL"; // to retrieve unbooked items
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