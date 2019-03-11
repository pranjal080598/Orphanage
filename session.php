<?php
session_start();
$conn = new mysqli("127.0.0.1:3306","root","root@123","orphanation");
$user_check = $_SESSION['login_user'];

if(!isset($user_check)){
	$conn->close();
	// session_destroy();
	header('Location:/orphanage/login.php'); // Redirecting To Home Page
}

$sql="select * from orphanation.admin where admin_name='$user_check'";
$result = $conn ->query($sql);
$row = $result ->fetch_assoc();

$sql1="select * from orphanation.users where user_name='$user_check'";
$result1 = $conn ->query($sql1);
$row1 = $result1 ->fetch_assoc();

$sql2="select * from orphanation.middle_man where mm_name='$user_check'";
$result2 = $conn ->query($sql2);
$row2 = $result2 ->fetch_assoc();

$sql3="select * from orphanation.orphanage where orphanage_name='$user_check'";
$result3 = $conn ->query($sql3);
$row3 = $result3 ->fetch_assoc();


if ($result->num_rows>= 1) {
	$login_session =$row['admin_name'];
	$login_session_id=$row['admin_id'];
	$login_session_type="admin";
}

else if ($result1->num_rows>= 1) {
	$login_session =$row1['user_name'];
	$login_session_id=$row1['user_id'];
	$login_session_type="user";
}
else if ($result2->num_rows>= 1) {
	$login_session =$row2['mm_name'];
	$login_session_id=$row2['mm_id'];
	$login_session_type="mm";
}
else if ($result3->num_rows>= 1) {
	$login_session =$row3['orphanage_name'];
	$login_session_id=$row3['orphanage_id'];
	$login_session_type="orphanage";
}

if(!isset($login_session)){
	$conn->close();
	session_destroy();
	header('Location:/orphanage/login.php'); // Redirecting To Home Page
}

?>