<html>
<body>
      <?php  
        include 'connect.php';
        $sql = "SELECT * FROM locations";
        if($result = mysqli_query($conn, $sql)){
             if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                  echo row['RestID'];
                  echo row['longitude'];
                  echo row['latitude'];
                  echo row['isOpen'];
                }
             }
           }

      ?>

</body>
</html>