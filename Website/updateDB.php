<?php

include 'connect.php';

if (!isset($_COOKIE["table_number"]))
{
  setcookie("table_number", 17, time() + 3600);
}

$table_number = $_COOKIE["table_number"];

$stuff = array("Water", "clean", "Util", "Bill", "parcel","other");
$valueToBeChanged = $_GET['value'];
$val = $stuff[$valueToBeChanged];
$order = $_GET['order'];
$sql = "update atrest set $val = 1 where ID = $order";

if ($conn->query($sql) === TRUE) {
   
} else {
    echo $sql;
}

?> 