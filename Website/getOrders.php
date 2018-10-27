<?php header('Content-type: text/xml');
$dom = new DOMDocument("1.0");
$node = $dom->createElement("Orders");
$parnode = $dom->appendChild($node);
include 'connect.php';
$sql = "SELECT * FROM atRest";
if($result = mysqli_query($conn, $sql)){
     if(mysqli_num_rows($result) > 0){

           while($row = mysqli_fetch_array($result)){
            $node = $dom->createElement("Restaurant");
  				  $newnode = $parnode->appendChild($node);
  				  $newnode->setAttribute("ID",$row['ID']);
     			  $newnode->setAttribute("water",$row['Water']);
 				    $newnode->setAttribute("clean",$row['clean']);
  				  $newnode->setAttribute("Utilities", $row['Util']);
            $newnode->setAttribute("bill",$row['Bill']);
            $newnode->setAttribute("parcel",$row['parcel']);
            $newnode->setAttribute("other", $row['other']);
              }
            }
          }
else{
      echo mysqli_error($conn);
    }
$sql = "SELECT * FROM orders where isRest = 0";
if($result = mysqli_query($conn, $sql)){
     if(mysqli_num_rows($result) > 0){
           while($row = mysqli_fetch_array($result)){
            $node = $dom->createElement("Online");
            $newnode = $parnode->appendChild($node);
            $newnode->setAttribute("Name",$row['Name']);
            $newnode->setAttribute("Phone",$row['phoneNumber']);
            $newnode->setAttribute("status",$row['status']);
            $newnode->setAttribute("orderID", $row['orderID']);
                }
             }
           }
else{
            echo mysqli_error($conn);
    }
          ob_clean();
          echo $dom->saveXML();
?>