<?php
$url = parse_url(getenv("postgres://ujecjnqievwhin:0f8b457958dd412343862aa5769864ce7ca29292816c0bb389c488488c23fef0@ec2-34-233-214-228.compute-1.amazonaws.com:5432/djf5r710q1slb"));
?>
<!DOCTYPE html>
<html>
  <head>
    <title> </title>
    </head>
  <body>
    <h1>hello</h1>
      <?php
      $url="select * from SATFF;";
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
