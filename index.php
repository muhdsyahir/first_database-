<?php
$dbservename = "ec2-34-233-214-228.compute-1.amazonaws.com";
$username = "ujecjnqievwhin";
&password = "0f8b457958dd412343862aa5769864ce7ca29292816c0bb389c488488c23fef0";
$dbname ="djf5r710q1slb";

//creating connection
$conn=new mysqli($servername, $username, $password,$dbname);

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
</body>
</html>
