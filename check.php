<?php 
$servername = "127.0.0.1:3306";
        $username = "root";
        $password = "root@123";
		$dbname = "orphanation";
		          // Create connection
				// $conn = new mysqli($servername, $username, $password, $dbname);
		$conn=new mysqli($servername,$username,$password,$dbname);
		// $conn =new mysqli($servername, $username, $password, $dbname);
		if($conn->connect_error)
		{
			echo "connection Fail";
		}
?>