<?php
session_start();
if(!isset($_SESSION['uname']))
{
	echo "<script>window.location.href='index.php';</script>";
}
if(!isset($_POST['vendor']))
{
	echo "<script>window.location.href='removevendor.php';</script>";
}
$con=mysqli_connect("localhost","root","","stock");
$x=$_POST['vendor'];
$y="vendor";
$smt=$con->prepare("select * from admin where value=? and category=? ");
$smt->bind_param('ss',$x,$y);
$smt->execute();
$res=$smt->get_result();
if($row=$res->fetch_assoc())
{
	$smt=$con->prepare("delete from admin where value=? and category=? ");
	$smt->bind_param('ss',$x,$y);
	$smt->execute();
	echo "<script>window.alert('Vendor Deleted');</script>";
	echo "<script>window.location.href='vendors.php';</script>";
}
else{
	echo "<script>window.alert('Vendor not found');</script>";
	echo "<script>window.location.href='vendors.php';</script>";
}	
?>