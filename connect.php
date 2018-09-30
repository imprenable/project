<?php
//ini_set('display_errors', 1);
$servername="localhost";
$username="root";
$password="";
// Create connection
$con = new mysqli($servername, $username, $password, "mydb");
// Check connection
if ($con->connect_error) {
    //die("Connection failed: " . $conn->connect_error);
} 
?>
