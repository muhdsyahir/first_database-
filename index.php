<?php
include_once 'includes/connect.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title> </title>
    </head>
  <body>
      <?php
      $sql="select * from SATFF;";
      $result = mysqli_query($conn,$sql);
      $resultcheck=mysqli_num_rows(result);
      if ($resultcheck>0){
      while($row=mysqli_fetch_assoc($result)){
        echo $row['id'];
      }
      }
      ?>
  </body>
  
</html>
