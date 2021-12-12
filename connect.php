<?php
	$prodID = $_POST['prodid'];
	$prodSize = $_POST['prodsize'];
	$prodQty = $_POST['prodqty'];
	$prodName = $_POST['prodname'];
	$prodDesc = $_POST['proddesc'];
	$prodPrice = $_POST['prodprice'];

$conn = new msqli('localhost','root','','babyshop');
if ($conn ->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}
else{
	$stmt=$conn->prepare("insert into registration(prodID,prodSize,prodQty,prodName,prodDescription,prodPrice)
values (?,?,?,?,?,?)");
	$stmt->bind_param("iiissi",$prodID,$prodSize,$prodQty,$prodName,$prodDescription,$prodPrice);

$stmt->execute();
echo"add successful";
$stmt->close();
$conn->close();
}


?>
