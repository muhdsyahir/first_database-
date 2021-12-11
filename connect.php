<?php
	$prodID = $_POST['prodID'];
	$prodSize = $_POST['prodSize'];
	$prodQty = $_POST['prodQty'];
	$prodName = $_POST['prodName'];
	$prodDesc = $_POST['prodDesc'];
	$prodPrice = $_POST['prodPrice'];

$conn = new msqli('localhost','root','','babyshop');
if ($conn ->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}
else{
	$stmt=$conn->prepare("insert into registration(prodID,prodSize,prodQty,prodName,prodDescription,prodPrice)
values (?,?,?,?,?,?)");
	$stmt->bind_param("siissi",$prodID,$prodSize,$prodQty,$prodName,$prodDescription,$prodPrice);

$stmt->execute();
echo"add successful";
$stmt->close();
$conn->close();
}


?>
