<?php 
$servername = "localhost";
$username = "root";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

$selDB = mysqli_query($conn, "use IWP_restaurant;");
?>
