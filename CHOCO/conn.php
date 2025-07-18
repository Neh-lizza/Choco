<?php 
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_dbname";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection 
if($conn->connect_error){
    die("connection failed: ". $conn->connect_error);
}


?>