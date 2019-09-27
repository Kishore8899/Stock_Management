<?php
$x=$_GET['item'];
$con=mysqli_connect("localhost","root","","stock");
	$smt=$con->prepare("select * from category where item=?");
	$smt->bind_param('s',$x);
	$smt->execute();
	$res=$smt->get_result();
	if($row=$res->fetch_assoc())
	{
		echo $row['category'];
	}
?>