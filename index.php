<?php
include_once 'connect.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title> </title>
    </head>
  <body>
    <h1>hello</h1>
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
