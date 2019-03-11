<?php
include('session.php');
?>
<?php
          if (isset($_GET["search"]))
          {
            $conn = new mysqli("127.0.0.1:3306","root","root@123","orphanation");
            echo "Seesion Id".$login_session_id; 
            echo "string".$_SESSION['login_used']; 
            $a=$_SESSION['login_used'];
            $sql="update orphanation.orphanage set approved_by='{$login_session_id}' where orphanage_id='{$a}'";
            if ($conn->query($sql) === TRUE) {
                  echo "New record created successfully";
                  header("Location:/orphanage/orphanage.php");
              }
              else{
                echo "Unsuccesfull";
              }
          }
          ?>