<?php
session_start();
if(!isset($_SESSION['uname']))
{
	echo "<script>window.location.href='index.php';</script>";
}
if(!isset($_POST['vendor']))
{
	echo "<script>window.location.href='vendors.php';</script>";
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
	echo "<script>window.alert('Value Already Exists');</script>";
	echo "<script>window.location.href='vendors.php';</script>";
}
else{
	$smt=$con->prepare("insert into admin(value,category) values(?,?)");
	$smt->bind_param('ss',$x,$y);
	$smt->execute();
	echo "<script>window.alert('Value Added Successfully');</script>";
	echo "<script>window.location.href='vendors.php';</script>";
}
?>