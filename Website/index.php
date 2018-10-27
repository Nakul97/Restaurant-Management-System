<?php header('Content-type: text/xml');
$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);
include 'connect.php';
$sql = "SELECT * FROM locations";
if($result = mysqli_query($conn, $sql)){
     if(mysqli_num_rows($result) > 0){
           while($row = mysqli_fetch_array($result)){
                  $node = $dom->createElement("marker");
  				  $newnode = $parnode->appendChild($node);
  				  $newnode->setAttribute("RestID",$row['RestID']);
     			  $newnode->setAttribute("longitude",$row['longitude']);
 				    $newnode->setAttribute("latitude",$row['latitude']);
  				  $newnode->setAttribute("isOpen", $row['isOpen']);
                }
             }
           }
else{
          	echo mysqli_error($conn);
          }



          ob_clean();
          echo $dom->saveXML();
?>
