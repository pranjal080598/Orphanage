<?php
include('check_session.php'); // Includes Login Script

if(isset($_SESSION['login_user']))
{
header("Location:/Project/index.php");
}
?>

<html>
<head>
<title>Signup Now!</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font --> 
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body style="background: #1f76bd">
  <!-- main -->
  <div class="main-w3layouts wrapper">
    <h1>SignUp Here!</h1>
    <div class="main-agileinfo">
      <div class="agileits-top"> 
        <form method="post" action="check_session.php"> 
          <input class="text" type="text" name="Username" placeholder="Username" required=""><br>
          <!-- <input class="text email" type="email" name="email" placeholder="Email" required=""> -->
          <input class="text" type="password" name="password" placeholder="Password" required=""><br>
          <!-- <input class="text w3lpass" type="password" name="password" placeholder="Confirm Password" required=""> -->
          <div class="wthree-text">  
            <label class="anim">
              <input type="checkbox" class="checkbox" required="" style="background: #144670">
              <span>I Agree To The Terms & Conditions</span> 
            </label>  
            <div class="clear"> </div>
          </div>   
          <input type="submit" value="LOGIN" name='btn_login' style="background: #144670">
        </form>
        <p>Don't have an Account? <a href="user_registration.php"> Sign Up Now!</a></p>
        <p>Don't have an Orphanage Account? <a href="orphanage_registration.php"> Sign Up Now!</a></p>
      </div>   
    </div>  
    <!-- copyright -->
    <div class="w3copyright-agile">
    </div>
    <div class="w3copyright-agile">
    </div>
    <!-- //copyright -->
    <ul class="w3lsg-bubbles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
       <li></li>
      <li></li>
       <li></li>
      <li></li>
       <li></li>
      <li></li>
       <li></li>
      <li></li>
    </ul>
    <ul class="w3lsg-bubbles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
       <li></li>
      <li></li>
       <li></li>
      <li></li>
       <li></li>
      <li></li>
       <li></li>
      <li></li>
    </ul>
  </div>  
</body>
</html>