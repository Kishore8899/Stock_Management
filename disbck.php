<?php
session_start();
if(!isset($_SESSION['uname'])){
	header('Location: index.php');
}
function dodispatch($item,$quantity,$place,$date){
		$con=mysqli_connect("localhost","root","","stock");
		$smt=$con->prepare("select * from current where item=?");
		$smt->bind_param('s',$item);
		$smt->execute();
		$res=$smt->get_result();
		if($row=$res->fetch_assoc())
		{
		if(($row['quantity']-$quantity)<0)
		{
			echo "<script>alert('Stock Not Available');</script>";
			//echo "<script>window.location.href='dispatch.php';</script>";
		}
		else{
			$x=$row['quantity']-$quantity;
			$smt=$con->prepare("update current set quantity=? where item=?");
			$smt->bind_param('ss',$x,$item);
			$smt->execute();
			
			
			$smt=$con->prepare("insert into dispatch (item,quantity,place,date) values(?,?,?,?)");
			$smt->bind_param('ssss',$item,$quantity,$place,$date);
			$smt->execute();
		}
		}
		else{
			echo "<script>alert('Item Not Available');</script>";
			//echo "<script>window.location.href='dispatch.php';</script>";
		}
		$dates = explode('-', $date);
		echo $dates[1];
		//SELECT MONTH('2017/05/25 09:08') AS Month;
		$smt=$con->prepare("select * from dupcurrent where item=? and extract(MONTH FROM date)=?");
		$smt->bind_param('si',$item,$dates[1]);
		$smt->execute();
		$res=$smt->get_result();
		if($row=$res->fetch_assoc())
		{
		if(($row['quantity']-$quantity)<0)
		{
			echo "<script>alert('Stock Not Available');</script>";
			//echo "<script>window.location.href='dispatch.php';</script>";
		}
		else{
			$x=$row['quantity']-$quantity;
			$smt=$con->prepare("update dupcurrent set quantity=? where item=? and extract(MONTH FROM date)=?");
			$smt->bind_param('ssi',$x,$item,$dates[1]);
			$smt->execute();
			
			
			//$smt=$con->prepare("insert into dispatch (item,quantity,place,date) values(?,?,?,?)");
			//$smt->bind_param('ssss',$item,$quantity,$place,$date);
			//$smt->execute();
		}
		}
		else{
			echo "<script>alert('Item Not Available');</script>";
			//echo "<script>window.location.href6='dispatch.php';</script>";
		}
		$con->close();
}

$date=$_POST['date'];
/*
if( $_POST['item1']!="" && $_POST['quantity1']!="") {echo "yes";}
else echo "no";*/

$counter = 1;
$item = "name".$counter;
while(isset($_POST[$item]) && $_POST[$item] !="" ) {
	if(isset($_POST["rmk".$counter])){
		dodispatch( $_POST[$item] , $_POST["rmk".$counter] , "RMK" ,$date);
	}

	if(isset($_POST["rmd".$counter])){
		dodispatch( $_POST[$item] , $_POST["rmd".$counter] , "RMD" ,$date);
	}

	if(isset($_POST["rmkcet".$counter])){
		dodispatch( $_POST[$item] , $_POST["rmkcet".$counter] , "RMKCET" ,$date);
	}

	if(isset($_POST["school".$counter])){
		dodispatch( $_POST[$item] , $_POST["school".$counter] , "SCHOOL" ,$date);
	}

	$counter++;
	$item = "name".$counter;
}
echo "<script>alert('Dispatch success');</script>";
echo "<script>window.location.href='dispatch.php';</script>";


/*
if($_POST['item']!="" && $_POST['quantity']!="" && $_POST['place']!=""){
	dodispatch($_POST['item'],$_POST['quantity'],$_POST['place'],$date);
}

if( $_POST['item1']!="" && $_POST['quantity1']!=""){
	dodispatch($_POST['item1'],$_POST['quantity1'],$_POST['place1'],$date);
}

if($_POST['item2']!="" && $_POST['quantity2']!="" ){
	dodispatch($_POST['item2'],$_POST['quantity2'],$_POST['place2'],$date);
}

if( $_POST['item3']!="" && $_POST['quantity3']!="" ){
	dodispatch($_POST['item3'],$_POST['quantity3'],$_POST['place3'],$date);
}

if( $_POST['item4']!="" && $_POST['quantity4']!="" ){
	dodispatch($_POST['item4'],$_POST['quantity4'],$_POST['place4'],$date);
}

if( $_POST['item5']!="" && $_POST['quantity5']!="" ){
	dodispatch($_POST['item5'],$_POST['quantity5'],$_POST['place5'],$date);
}

if( $_POST['item6']!="" && $_POST['quantity6']!="" ){
	dodispatch($_POST['item6'],$_POST['quantity6'],$_POST['place6'],$date);
}

if( $_POST['item7']!="" && $_POST['quantity7']!="" ){
	dodispatch($_POST['item7'],$_POST['quantity7'],$_POST['place7'],$date);
}

if( $_POST['item8']!="" && $_POST['quantity8']!="" ){
	dodispatch($_POST['item8'],$_POST['quantity8'],$_POST['place8'],$date);
}

if( $_POST['item9']!="" && $_POST['quantity9']!="" ){
	dodispatch($_POST['item9'],$_POST['quantity9'],$_POST['place9'],$date);
}

if( $_POST['item10']!="" && $_POST['quantity10']!="" ){
	dodispatch($_POST['item10'],$_POST['quantity10'],$_POST['place10'],$date);
}

if( $_POST['item11']!="" && $_POST['quantity11']!="" ){
	dodispatch($_POST['item11'],$_POST['quantity11'],$_POST['place11'],$date);
}

if( $_POST['item12']!="" && $_POST['quantity12']!="" ){
	dodispatch($_POST['item12'],$_POST['quantity12'],$_POST['place12'],$date);
}

if( $_POST['item13']!="" && $_POST['quantity13']!="" ){
	dodispatch($_POST['item13'],$_POST['quantity13'],$_POST['place13'],$date);
}

if( $_POST['item14']!="" && $_POST['quantity14']!="" ){
	dodispatch($_POST['item14'],$_POST['quantity14'],$_POST['place14'],$date);
}

//echo "<script>alert('Dispatch success');</script>";
echo "<script>window.location.href='dispatch.php';</script>";
*/
?>