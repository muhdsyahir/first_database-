<?php
$dbservename = "localhost";
$username = "username";
&password = "password";
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
