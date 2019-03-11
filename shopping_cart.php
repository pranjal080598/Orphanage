<?php
session_start();
if(isset($_POST["add_to_cart"]))
{
  if(isset($_SESSION["shopping_cart"]))
  {
    $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
    if(!in_array($_GET["id"],$item_array_id))
    {
      $count1= count($_SESSION["shopping_cart"]);
      $item_array=array(
        'item_id' => $_GET["id"],
        'item_name' => $_POST["hidden_name"],
        'item_price' => $_POST["hidden_price"],
        'item_image' => $_POST["hidden_img_id"]
      );
      $_SESSION["shopping_cart"][$count1]=$item_array;
    }
    else
    {
      echo '<script>alert("Item Already Added")</script>';
      echo '<script>window.location="category11.php"</script>';
    }
  }
  else
  {
    $item_array=array(
      'item_id' => $_GET["id"],
      'item_name' => $_POST["hidden_name"],
      'item_price' => $_POST["hidden_price"],
      'item_image' => $_POST["hidden_img_id"]
    );
    $_SESSION["shopping_cart"][0] = $item_array;
    $var1="Item added";
  }

}

if(isset($_GET["action"]))
{
	if($_GET["action"]=="delete")
	{
		foreach ($_SESSION["shopping_cart"] as $keys => $values) 
		{
			if($values["item_id"]==$_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="category11.php"</script>';
			}
		}
	}
}
?>
<!DOCTYPE html>
<html>
   <head>
      <title>GiftStore</title>
      <meta name="viewport" content="width=device-width, initial-scale=1"> 
      <!-- FONTS      -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">  
      <!-- Font Awesome Bootstrap -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--Materialized CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      <!-- CSS -->
      <link rel="stylesheet" href="css/go_to.css">
      <link rel="stylesheet" href="css/style1.css">

      <style>
		.grad1{
			background:linear-gradient(black,grey);
		}
		.card_color{
			background-color: #ffab91;
		}
		.card_font{
			font-size: 17px;
		}
		.card_button{
			font-size: 15px;
			border-radius: 10px;
			margin-left: 40%;
			font-size: 20px;
			background-color: white;
			border:2px solid black;
			transition: 0.5s;
			padding:5px 20px 5px 20px; 
		}
		.card_button:hover{
			background-color: black;
			color:white;
			transition: 0.5s;
		}
      </style>
   </head>
   
   <body>
      <div class="row navbar-fixed">
         <nav class="black">
            <div class="nav-wrapper">
               <a href="index.html" class="brand-logo">GiftStore</a>
               <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
               <ul id="categories1" class="dropdown-content" databeloworigin="true">
                  <li><a href="category1.html" class="dropdown_link">One</a></li>
                  <li><a href="category2.html" class="dropdown_link">Two</a></li>
                  <li class="divider"></li>
                  <li><a href="category3.html" class="dropdown_link">Three</a></li>
                  <li><a href="category4.html" class="dropdown_link">Four</a></li>
               </ul>
               <ul id="nav-mobile" class="right hide-on-med-and-down">
                  <li><a href="index.html" class="navlink">Home</a></li>
                  <li><a href="#" class="dropdown-trigger navlink" data-activates="categories1">Categories<i class="material-icons right">arrow_drop_down</i></a></li>
                  <li><a href="aboutus.html" class="navlink">About Us</a></li>
                  <li><a href="contactus.html" class="navlink">Contact Us</a></li>
                  <li><a href="signup.php" class="navlink">Sign Up</a></li>  
               </ul>
               <ul class="side-nav" id="mobile-demo">
                <li><a href="index.html" class="side_logo left-align">GiftStore</a></li>
                <hr>
                <li><a href="index.html" class="side_nav">Home</a></li>
                <li><a href="aboutus.html" class="side_nav">About Us</a></li>
                <li><a href="contactus.html" class="side_nav">Contact Us</a></li>
                <li><a href="signup.php" class="side_nav">SignUp</a></li>
            </ul>
          </div>
        </nav>
      </div>
	  	<div class="grad1" style="margin-top:-20px;">
	  		<?php
				if(!empty($_SESSION["shopping_cart"]))
				{
					$total=0;
					$count2=0;
					foreach($_SESSION["shopping_cart"] as $keys => $values)
					{
						if($count2==0)
						{
			?>
			<div class="row">
			<?php
				}
				$count2=$count2+1;
			?>
				<div class="col s12 m6 l3">
			      <div class="card medium">
			        <div class="card-image">
			          <img src="images/jewellery/<?php echo $values["item_image"];?>">
			          <span class="card-title"><?php echo $values["item_name"];?></span>
			        </div>
			        <div class="card-content">
			          <p>Rs <?php echo $values["item_price"];?></p>
			        </div>
			        <div class="card-action">
			          <a href="shopping_cart.php?action=delete&id=<?php echo $values["item_id"];?>" class="card_button">Remove</a>
			        </div>
			      </div>
			    </div>

			<?php
				$total = $total + $values["item_price"];
					if($count2==4)
					{
						$count2=0;
			?>
			</div>
			<?php
					}
				}
			}
			?>
  		</div>	
	  <!-- Preloader -->
      <div id="loader-wrapper">
         <div id="loader"></div>

         <div class="loader-section section-left"></div>
         <div class="loader-section section-right"></div>

      </div>
      <!-- Go To Top -->
      <div id="go-top" style="display: none;">
         <a title="Back to Top" href="#"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>
      </div>
     <!-- Page Footer -->
      <div class="row" style="margin-top:-20px">
         <footer class="page-footer black white-text">
            <div class="row center-align">
                <div class="col s12 m12 l12">
                  <h4><a href="index.html" class="footerlogo">GiftStore</a></h4>
                  <!-- <p class="white-text">Information will be provided soon.</p> -->
                </div>
            </div>
             <div class="row center-align">
                <div class="col s12 m12 l12">
                    <a href="index.html" class="link">Home<span class="white-text"> |</span></a> 
                    <a href="aboutus.html" class="link">About Us<span class="white-text"> |</span></a> 
                     <a href="contactus.html" class="link">Contact Us<span class="white-text"> |</span></a> 
                  </div>
              </div> 
              <div class="row center-align">
               <div id="social">
                  <a class="facebookBtn smGlobalBtn" href="#!"></a>
                  <a class="googleplusBtn smGlobalBtn" href="#!"></a>
               </div>
              </div>
              <div class="row center-align marginReduce footer-copyright" style="margin-bottom:-20px;">
               <div id="footertext" class="col s12 m12 l12">
                  &copy 2018 Copyright Text .All Rights reserved.
               </div>
            </div>
         </footer>
      </div>

	</body>
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script><script src="js/jquery.validate.min.js"></script>
	<script src="js/additional-methods.min.js"></script>
	<script src="js/init.js"></script>
	<script type="text/javascript">
		//Dropdown Trigger
         $(document).ready(function(){
            $('.dropdown-trigger').dropdown({
               belowOrigin:true
            });
         });
         $(document).ready(function(){
            $('#go-top').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
          });
        });
         //Preloader 
         $(document).ready(function() {
            $(window).load(function(){
                setTimeout(function(){
                    $('body').addClass('loaded');
                }, 1000);
            });
         }); 
         //Go Top 
            var pxShow = 100; // height on which the button will show
            var fadeInTime = 400; // how slow/fast you want the button to show
            var fadeOutTime = 400; // how slow/fast you want the button to hide

            // Show or hide the sticky footer button
            jQuery(window).scroll(function() {

               if (jQuery(window).scrollTop() >= pxShow) {
                  jQuery("#go-top").fadeIn(fadeInTime);
               } else {
                  jQuery("#go-top").fadeOut(fadeOutTime);
               }

           });
	</script>
</html>