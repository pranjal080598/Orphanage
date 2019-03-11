<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("127.0.0.1:3306", "root", "root@123", "orphanation");
$conn = new mysqli("127.0.0.1:3306","root","root@123","orphanation");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
if(isset($_REQUEST["term"])){
    // Prepare a select statement
    $i=0;
    $sql = "SELECT * FROM middle_man WHERE mm_name LIKE ?";
    $stmt = mysqli_prepare($link, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_term);
    $param_term = $_REQUEST["term"] . '%';
    if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
             if(mysqli_num_rows($result) > 0){
                // Outer While
                 while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                        $mm_id=$row['mm_id'];
                        // $row = mysqli_fetch_array($result, MYSQLI_ASSOC)
                        // $orphanage_id=$row[0]['orphanage_id'];
                        $sql1= "SELECT * FROM orphanation.middle_man WHERE mm_id='{$mm_id}'";
                        $result1 = $conn ->query($sql1);
                        // $row1= $result1 ->fetch_assoc();
                        //Inner While
                        while($row1 = $result1 ->fetch_assoc()){
                            // $sql2= "SELECT * FROM orphanation.middle_man WHERE mm_id='{$mm_id}'";
                            // $result2 = $conn ->query($sql2);
                            // $result2=mysqli_query($link,$sql2);
                            //$row2=$result2->fetch_row();
                            // $row2=mysqli_fetch_row($result2);
                            echo '<span style="background-color:#AFA;text-align:center;">';
                            echo "<p>" . $row1["mm_id"]." - ".$row1['mm_name']  . "</p>";
                            break;
                        }//inner while(2) 
                }//outer While(1) 
            }//End Of if
            else{
                echo "<p>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    
    

                    /*if($stmt = mysqli_prepare($link, $sql)){
                        // Bind variables to the prepared statement as parameters
                        mysqli_stmt_bind_param($stmt, "s", $param_term);
                        
                        // Set parameters
                        $param_term = $_REQUEST["term"] . '%';
                        
                        // Attempt to execute the prepared statement
                        if(mysqli_stmt_execute($stmt)){
                            $result = mysqli_stmt_get_result($stmt);
                            
                            // Check number of rows in the result set
                            if(mysqli_num_rows($result) > 0){
                                // Fetch result rows as an associative array
                                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                    echo "<p>" . $row["orphanage_id"] . "</p>";
                                }
                            } else{
                                echo "<p>No matches found</p>";
                            }
                        } else{
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }
                    }*/
                     
    // Close statement
    mysqli_stmt_close($stmt);
}
 
// close connection
mysqli_close($link);
?>