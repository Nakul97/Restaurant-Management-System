<?php 


include 'connect.php';


$name = $_POST['name1'];
$number = $_POST['number'];
$date = $_POST['date'];
$lon = $_POST['lon'];
$lat =  $_POST['lat'];
$mail =  $_POST['mail'];


$sql = "INSERT into orders(Name, phoneNumber, email, birthdate, longitude, latitude) values('$name', '$number', '$mail', '1997-07-16', '$lon','$lat')";

if($result = mysqli_query($conn, $sql)){
	$sql = "SELECT orderID from orders where phoneNumber = '$number'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	echo $row['orderID'];
}


?>