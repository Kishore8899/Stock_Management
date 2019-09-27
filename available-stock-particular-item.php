<?php
$itemname = $_POST["item"];
$connection = mysqli_connect("localhost" , "root" , "" , "stock");
$sql = "select * from current where item = ? ";
$statement = $connection->prepare($sql);
$statement->bind_param('s',$itemname);
$statement->execute();
$result = $statement->get_result();
if($row = $result->fetch_assoc()){
	echo $row["quantity"];
}
else{
	echo "This item is not available";
}
?>