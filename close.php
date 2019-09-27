<?php
session_start();
if(!isset($_SESSION['uname'])){
	header('Location: index.php');
}
if($_POST['month']!="")
{	
	$month = $_POST['month'];
	$dates = explode('-', $month);
}
$con=mysqli_connect("localhost","root","","stock");
$smt=$con->prepare("select * from current");
$smt->execute();
$res=$smt->get_result();
while($row=$res->fetch_assoc())
    {
    	$y=$row['item'];
    	$smt=$con->prepare("select * from dupcurrent where item=? and extract(MONTH FROM date)=?");
		$smt->bind_param('si',$y,$dates[1]);
		$smt->execute();
		$res1=$smt->get_result();
		$row1=$res1->fetch_assoc();
		$x= $row1['quantity'];
		//$r="1-10-2019";
		$r=date("2019-10-01");
		$smt=$con->prepare("insert into dupcurrent(item,category,quantity,date) values(?,?,?,?)");
	    $smt->bind_param('ssss',$y,$row1['category'],$x,$r);
	    $smt->execute();
        // echo "<script>window.location.href='dataselect.php';</script>";
    }
    echo "<script>alert('Stock closed successfully');</script>";
    echo "<script>window.location.href='dateselect.php';</script>";
?>