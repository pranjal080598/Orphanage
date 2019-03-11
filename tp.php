<?php 
echo "HELLO";
include('cartview.php');
if(isset($_SESSION['cart'])){
    //Loop through it like any other array.
    foreach($_SESSION['cart'] as $o_id){
        //Print out the product ID.
        echo "HELLO";
        echo $o_id, '<br>';
        $query="Update orders set orphanage_id='$login_session_id' where order_id='$o_id'"; // to remove items from cart1.php
	 	$result=mysqli_query($conn,$query);

    }
}
?>
