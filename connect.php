<?php
$dbname = "ec2-3-217-216-13.compute-1.amazonaws.com";
$user = "glhveawjzrngzr";
&password = "4ff4096802faba2816c39e83dee75eb02d759800428ca6583e3f7500b044ff25";
$dbname ="df16sa0f980p0i";

//creating connection
$conn=new mysqli($servername, $username, $password,$dbname);

//checking connection
if ($conn->connect_error)
{
	die ("connection failed : ".$conn->connect_error);
}
echo"connected successfully";
?>
