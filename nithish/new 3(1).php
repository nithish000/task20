<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "nithish");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $mobno = $_POST["mobno"];

// Escape user inputs for security
 // Attempt insert query execution
$sql = "select * from task where mobno = $mobno";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0){

	include("leaderboard.html");
} else{
    echo "No database";
}
 
// Close connection
mysqli_close($link);
?>