<? php
servename = "ec2-34-233-214-228.compute-1.amazonaws.com";
$username = "ujecjnqievwhin";
&password = "0f8b457958dd412343862aa5769864ce7ca29292816c0bb389c488488c23fef0";

//creating connection
$conn=new mysqli($servername, $username, $password);

//checking connection
if ($conn->connect_error)
{
	die ("connection failed : ".$conn->connect_error);
}
echo"connected successfully";
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<title>View</title>
</head>
<body>

<h1><center>Mom's Baby World<center></h1>
<form action="/action_page.php">
<div style="background-color:#95afc0">
	<div class="container">
		<div class="row">

			<div class="col-md-8 pt-2 pb-2" >
				<a class="pl-3" style="color:black" href="view.php">View Product</a>
				<a class="pl-3" style="color:black" href="addProduct.php">Add Product</a>
				<a class="pl-3" style="color:black" href="editProduct.php">Edit Product</a>
				<a class="pl-3 " style="color:black" href="deleteProduct.php">Delete Product</a>
			</div>

			<div class="col-md-4 pt-2 pb-2" style="float:right; padding-left: 140px;" >
				<a href="../logout.php" style="color:white"><button type="button" button class="btn btn-default btn-sm"><span class="glyphicon glyphicon-log-out"></span>Log Out</button></a>    
			</div>


		</div>
	</div>
</div>
<div class="container"><br><br>
<div class="card">
	  <div class="card-header"style="background-color:#ffffff">
		View Product 
	  </div>
	  <div class="card-body"style="background-color:#dfe4ea">
		<blockquote class="blockquote mb-0">
			<div class="form-row">
				
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Product ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Size</th>
      <th scope="col">Description</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">01</th>
      <td>Bunny Shirt</td>
      <td>12-18 Months</td>
      <td>Black Colour</td>
      <td>123</td>
      <td>RM20</td>
    </tr>
   
  </tbody>
</table>
			</div>
		</blockquote>
	</div>
</div>
</div>
	
  
   
</form>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script
</body>
</html>
