  <?php
include('check_session.php'); // Includes Login Script

if(isset($_SESSION['login_user']))
{
header("Location:/Project/index.php");
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
        <form method="post" id="registeruser" enctype="multipart/form-data"> 
          <input class="text" type="text" name="name" placeholder="Orphanage Name" required=""><br>
          <input class="text" type="text" name="email" id="email" placeholder="Orphanage ID" required=""><br>
          <input class="text" type="password" name="password" id='password' placeholder="Password" required=""><br>
          <input class="text " type="password" name="confirm_password" placeholder="Confirm Password" required=""><br>
           <input class="text" type="text" name="owners_name" placeholder="Owners name" required=""><br>
          <input type="date" id="date" name="date" placeholder="Date" required="" style="width: 415px; height: 40px; color: #fff;  font-size: 0.9em;"><br>
          <input class="text" type="text" placeholder="Phone Number" name='phone_no' id='phone_no' required=""><br>
          <input class="text" type="text" placeholder="Address" name='address' id='address' required=""><br>
           <label  for="upload_file" style="font-size: 0.9em;
    color: #fff;
    font-weight: 100;">Upload File:<input class="file" type="file" placeholder="Upload Doc" name='upload_file' id='upload_file' required=""><br><br>
        
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
          $servername="127.0.0.1:3306";
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
              $password1=$_POST["confirm_password"];
              $owners_name=$_POST["owners_name"];
              $name=$_POST["name"];
              $dob=$_POST["dob"];
              $phone=$_POST["phone_no"];
              $address=$_POST["address"];
              $upload_file=$_POST["upload_file"];
              $date1_sql = date('Y-m-d', $dob);
          

                  // Uploading File to Server
                  $file_name=$_FILES['upload_file']['name'];
                  $file_temp_loc=$_FILES['upload_file']['tmp_name'];
                  $file_store="uploads/".$file_name;
                  move_uploaded_file($file_temp_loc, $file_store);

                  if ($password!=$password1){
                    alert("Password Do Not Match");
                  }
              else{
                  $sql="INSERT INTO orphanation.orphanage values ('$email','$password','$name','$owners_name','$date1_sql','$address','$phone',NULL,'$file_name')";
                  if ($result=$conn->query($sql) == TRUE) {
                      echo "New record created successfully";
                      header('Location:/orphanage/login.php');
                  } else {
                       echo "Error: " . $sql . "<br>" . $conn->error;
                       header('Location:/Projecttttttttttttt/login.php');
                  }
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

