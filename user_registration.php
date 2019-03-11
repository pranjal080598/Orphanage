  <?php
include('check_session.php'); // Includes Login Script

if(isset($_SESSION['login_user']))
{
header("Location:/orphanage/index.php");
}
?>
<html>
<head>
<title>Bubble SignUp Form a Flat Responsive Widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bubble SignUp Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!--<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font --> 
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
  <!-- main mdl-textfield__input -->
  <div class="main-w3layouts wrapper">
    <h1>Bubble SignUp Form</h1>
    <div class="main-agileinfo">
      <div class="agileits-top"> 
        <form method="post" id="registeruser"> 
          <input class="text" type="text" name="name" placeholder="Username" required=""><br>
          <input class="text" type="text" name="email" id="email" placeholder="User ID" required=""><br>
          <input class="text" type="password" name="password" id='password' placeholder="Password" required=""><br>
          <input class="text " type="password" name="confirm_password" placeholder="Confirm Password" required=""><br>
          <input type="date" id="date" name="date" placeholder="Date" required="" style="width: 415px; height: 40px; color: #fff;  font-size: 0.9em;"><br>
          <input class="text" type="text" placeholder="Phone Number" name='phone_no' id='phone_no' required=""><br>
          <input class="text" type="text" placeholder="Address" name='address' id='address' required=""><br>
        
          <div class="wthree-text">  
            <label class="anim">
              <input type="checkbox" class="checkbox" required="">
              <span>I Agree To The Terms & Conditions</span> 
            </label>  
            <div class="clear"> </div>
          </div>   
          <input type="submit" value="SIGN UP" name="search" id="search" formt="registeruser">

            <!-- <span class="mdl-chip__text">Submit</span> -->
        </form>
        <p>Don't have an Orphanage Account? <a href="orphanage_registration.php"> Sign Up Now!</a></p>
        <p>Login? <a href="login.php"> Login Now!</a></p>
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
</head>

    <div class="section"></div>
    <div class="section"></div>
      
  </main>
  <?php
          error_reporting(0);
          $servername="localhost";
          $username="root";
          $password="root@123";
          $dbname="orphanation";
          // Create connection
          $conn=new mysqli($servername,$username,$password,$dbname);
          // Check connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          } 
           if (isset($_POST["search"]))
          {
              $email=$_POST["email"];
              $password=$_POST["password"];
              $confirm_password=$_POST["confirm_password"];
              $name=$_POST["name"];
              $dob=$_POST["dob"];
              $phone=$_POST["phone_no"];
              $address=$_POST["address"];
              $date1_sql = date('Y-m-d', $dob);
              echo "email".$email."name".$name;
              if($password==$confirm_password)
              {
                    $sql="INSERT INTO orphanation.users values ('$email','$name','$password','$date1_sql','$phone','$address')";
                    if ($result=$conn->query($sql) == TRUE) {
                        echo "New record created successfully";
                        header('Location:/orphanage/login.php');
                    } else {
                         echo "Error: " . $sql . "<br>" . $conn->error;
                         header('Location:/orphanage/user_registration.php');
                    }
                }
                else{
                    echo "alert('Password Do not Match')";
                    // header('Location:/orphanage/user_registration.php');
                    
                }
            }
            else{
              echo "BYEE!!!!!";
            }
        $conn->close();
       ?>
              
          

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>


  <script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="login/vendor/bootstrap/js/popper.js"></script>
  <script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="login/vendor/daterangepicker/moment.min.js"></script>
  <script src="login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="login/js/main.js"></script>


</body>

</html>
