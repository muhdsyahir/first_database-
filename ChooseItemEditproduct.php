<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<title>Choose Item Edit Product</title>
</head>
<body>

<h1><center>Mom's Baby World<center></h1>
<form action="/action_page.php">
<div style="background-color:#95afc0">
	<div class="container">
		<div class="row">

			<div class="col-md-8 pt-2 pb-2" >
				<a class="pl-3" style="color:black" href="view.php">View Product</a>
				<a class="pl-3 pr-3 " style="color:black" href="index.php">Add Product</a>
				<a class="pl-3 pr-3" style="color:black" href="videoAdmin.php">Edit Product</a>
				<a class="active-menu2 pl-3 pr-3" style="color:black" href="staffAdmin.php">Delete Product</a>
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
		Edit Product 
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
      <td>BUNNY SHIRT</td>
      <td>12-18 MONTHS</td>
      <td>BLACK COLOUR</td>
      <td>123</td>
      <td>RM20</td>
      <td><a href="edit.php ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</a>
		</td>
  </tr>
    </tr>
   
  </tbody>
</table>
			</div>
		</blockquote>
	</div>
</div>
</div>