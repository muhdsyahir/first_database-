
<?php
$dbservename = "ec2-34-233-214-228.compute-1.amazonaws.com";
$username = "ujecjnqievwhin";
$password = "0f8b457958dd412343862aa5769864ce7ca29292816c0bb389c488488c23fef0";
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
