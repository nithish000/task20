<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "nithish");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $firstName = $_POST["first_name"];
 $lastName = $_POST["last_name"];
 $email = $_POST["email"];
 $mobno=$_POST["mobno"];
// Escape user inputs for security
 // Attempt insert query execution
$sql = "INSERT INTO task (first_name, last_name, email,mobno)
VALUES ('$firstName', '$lastName', '$email','$mobno')";
if(mysqli_query($link, $sql)){
	include("leaderboard.html");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>