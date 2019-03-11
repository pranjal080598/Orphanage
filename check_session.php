<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
 if (isset($_POST["btn_login"])){
		// Define $username and $password
		$username=$_POST['Username'];
		$password=$_POST['password'];


		$servername = "127.0.0.1:3306";
        $username = "root";
        $password = "root@123";
		$dbname = "orphanation";
		          // Create connection
				// $conn = new mysqli($servername, $username, $password, $dbname);
		$conn =new mysqli($servername, $username, $password, $dbname);
		//$db=new mysqli_connect($servername, $username, $password, $dbname);
						//$conn = new mysqli("localhost","monil","admin@123","orphanage");
						//$username = stripslashes($username);
						//$password = stripslashes($password);
		$username=$_POST['Username'];
		$password=$_POST['password'];

		$sql="SELECT admin_id,admin_password,admin_name from orphanation.admin where admin_id = '$username' and admin_password = '$password'";
		$result = $conn ->query($sql)or die($conn->error);
		$row=$result->fetch_assoc();

		$sql1="SELECT user_id,user_password,user_name from orphanation.users where user_id = '$username' and user_password = '$password'";
		$result1 = $conn ->query($sql1)or die($conn->error);
		$row1= $result1->fetch_assoc();


		$sql2="SELECT mm_id,mm_password,mm_name from orphanation.middle_man where mm_id = '$username' and mm_password = '$password'";
		$result2 = $conn ->query($sql2)or die($conn->error);
		$row2= $result2->fetch_assoc();

		$sql3="SELECT orphanage_id,orphanage_password,orphanage_name,approved_by from orphanation.orphanage where orphanage_id = '$username' and orphanage_password = '$password'";
		$result3 = $conn ->query($sql3)or die($conn->error);
		$row3= $result3->fetch_assoc();


		if ($result->num_rows>= 1) {
				$_SESSION['login_user']=$row["admin_name"];// Initializing Session
				header("Location:/orphanage/index.php"); // Redirecting To Other Page
		} 
		else if($result1->num_rows>=1){
			$_SESSION['login_user']=$row1["user_name"];// Initializing Session
			//echo "BYE".$_SESSION['login_user'];
			header("Location:/orphanage/index.php"); // Redirecting To Other Page
		}
		else if($result2->num_rows>=1){
			$_SESSION['login_user']=$row2["mm_name"];// Initializing Session
			//echo "BYE".$_SESSION['login_user'];
			header("Location:/orphanage/index.php"); // Redirecting To Other Page
		}
		else if($result3->num_rows>=1){
			if($row3['approved_by']!=NULL){
					$_SESSION['login_user']=$row3["orphanage_name"];// Initializing Session
					//echo "BYE".$_SESSION['login_user'];
					header("Location:/orphanage/index.php"); // Redirecting To Other Page
			}
			else{
				$error = "Orphanage Not Approved";
				session_destroy();
				header("Location:/orphanage/login.php");

			}
		}
		else if($result->num_rows==0 || $result1->num_rows==0) {
				$error = "Username or Password is invalid";
				session_destroy();
				header("Location:/orphanage/login.php");
			}

	$conn->close();
	}
?>