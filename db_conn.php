<?php
$servername = "140.119.19.16";
$username = "howard";
$password = "ilovehoward";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . mysqli_error($conn));
   }
   echo "Connected successfully";
?>

