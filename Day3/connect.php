<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password) or die(mysqli_connect_error());
mysqli_select_db($conn,"result") or die(mysqli_error($conn));
echo "Connected successfully<br>";
?>