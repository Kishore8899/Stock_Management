<?php
session_start();
if(!isset($_SESSION['uname']))
{echo "<script>window.location.href='index.php';</script>";}
if(!isset($_POST['item1']))
{
echo "<script>window.location.href='purchase.php';</script>";
}

function ins($item1,$category1,$quantity1,$amountkg1,$total1,$date){
    $count = 0;
	$amount=0;
	$con=mysqli_connect("localhost","root","","stock");
	$smt=$con->prepare("insert into purchase(item,category,quantity,amountkg,amount,date) values(?,?,?,?,?,?)");
	$smt->bind_param('ssssss',$item1,$category1,$quantity1,$amountkg1,$total1,$date);
	$smt->execute();
	$smt=$con->prepare("select * from current where item=?");
	$smt->bind_param('s',$item1);
	$smt->execute();
	$res=$smt->get_result();
	if($row=$res->fetch_assoc())
	{
		$x=$row['quantity'];
		$x=$x+$quantity1;
		$smt=$con->prepare("update current set quantity=? where item=?");
		$smt->bind_param('ss',$x,$item1);
		$smt->execute();
	}
	else{
		$smt=$con->prepare("insert into current(item,category,quantity) values(?,?,?)");
	   $smt->bind_param('sss',$item1,$category1,$quantity1);
	   $smt->execute();
	}
	$smt=$con->prepare("select * from dupcurrent where item=?");
	$smt->bind_param('s',$item1);
	$smt->execute();
	$res=$smt->get_result();
	if($row=$res->fetch_assoc())
	{
		//echo date($date);
		$dates = explode('-', $date);
        echo $dates[1];
        if(date("n")==$dates[1])
        {
        $x=$row['quantity'];
		$x=$x+$quantity1;
		$smt=$con->prepare("update dupcurrent set quantity=? where item=? and  extract(MONTH FROM date)=?");
		$smt->bind_param('ssi',$x,$item1,$dates[1]);
		$smt->execute();
        }
		else
		{
			$smt=$con->prepare("insert into dupcurrent(item,category,quantity,date) values(?,?,?,?)");
	        $smt->bind_param('ssss',$item1,$category1,$quantity1,$date);
	        $smt->execute();
		}
	}
	else{
		$smt=$con->prepare("insert into dupcurrent(item,category,quantity,date) values(?,?,?,?)");
	   $smt->bind_param('ssss',$item1,$category1,$quantity1,$date);
	   $smt->execute();
	}
//     $smt=$con->prepare("select * from average where item=?");
// 	$smt->bind_param('s',$item1);
// 	$smt->execute();
//     $res=$smt->get_result();
//     if($row=$res->fetch_assoc())
// 	{
// 		$smt=$con->prepare("select count from average where item=?");
// $smt->bind_param('s',$item1);
// $smt->execute();
// 	    $count=$smt+1;
// 			    $amount=$amount+$amountkg1;
// 		$x=$amount/$count;
// 			$smt=$con->prepare("update average set rate=? where item=?");
// 		$smt->bind_param('ss',$x,$item1);
// 		$smt->execute();
// 					$smt=$con->prepare("update average set count=? where item=?");
// 		$smt->bind_param('ss',$count,$item1);
// 		$smt->execute();
// 	}
// 	else
// 	{
// 		$count=0;
// 			$smt=$con->prepare("insert into average(item,rate,quantity) values(?,?,?)");
// 	        $smt->bind_param('sss',$item1,$amountkg1,$quantity1);
// 	        $smt->execute();
// 					$smt=$con->prepare("select count from average where item=?");
// $smt->bind_param('s',$item1);
// $smt->execute();
// $res=$smt->get_result();
// //echo "$res";
// 	  //  $amount=$amount+$amountkg1;
// 	    $count=$res+1;
// 	         $amount=$amount+$amountkg1;
// 	  //  $count++;
// 		$x=$amount/$count;
// 			$smt=$con->prepare("update average set rate=? where item=?");
// 		$smt->bind_param('ss',$x,$item1);
// 		$smt->execute();
// 			$smt=$con->prepare("update average set count=? where item=?");
// 		$smt->bind_param('ss',$count,$item1);
// 		$smt->execute();
// 	}
	$con->close();
}
if($_POST['item1']!="" && $_POST['category1']!="" && $_POST['quantity1']!="" && $_POST['amountkg1']!="" && $_POST['total1']!="")
{	
	$date = $_POST['date'];
	$item1=$_POST['item1'];
	$category1=$_POST['category1'];
	$quantity1=$_POST['quantity1'];
	$amountkg1=$_POST['amountkg1'];
	$total1=$_POST['total1'];

	ins($item1,$category1,$quantity1,$amountkg1,$total1,$date);
}

if( $_POST['item2']!="" && $_POST['category2']!="" && $_POST['quantity2']!="" && $_POST['amountkg2']!="" && $_POST['total2']!="" )
{	
	$date = $_POST['date'];
	$item1=$_POST['item2'];
	$category1=$_POST['category2'];
	$quantity1=$_POST['quantity2'];
	$amountkg1=$_POST['amountkg2'];
	$total1=$_POST['total2'];

	ins($item1,$category1,$quantity1,$amountkg1,$total1,$date);
}

if( $_POST['item3']!="" && $_POST['category3']!="" && $_POST['quantity3']!="" && $_POST['amountkg3']!="" && $_POST['total3']!="" )
{	
	$date = $_POST['date'];
	$item1=$_POST['item3'];
	$category1=$_POST['category3'];
	$quantity1=$_POST['quantity3'];
	$amountkg1=$_POST['amountkg3'];
	$total1=$_POST['total3'];

	ins($item1,$category1,$quantity1,$amountkg1,$total1,$date);
}

if( $_POST['item4']!="" && $_POST['category4']!="" && $_POST['quantity4']!="" && $_POST['amountkg4']!="" && $_POST['total4']!="" )
{	
	$date = $_POST['date'];
	$item1=$_POST['item4'];
	$category1=$_POST['category4'];
	$quantity1=$_POST['quantity4'];
	$amountkg1=$_POST['amountkg4'];
	$total1=$_POST['total4'];

	ins($item1,$category1,$quantity1,$amountkg1,$total1,$date);
}

if( $_POST['item5']!="" && $_POST['category5']!="" && $_POST['quantity5']!="" && $_POST['amountkg5']!="" && $_POST['total5']!="" )
{	
	$date = $_POST['date'];
	$item1=$_POST['item5'];
	$category1=$_POST['category5'];
	$quantity1=$_POST['quantity5'];
	$amountkg1=$_POST['amountkg5'];
	$total1=$_POST['total5'];

	ins($item1,$category1,$quantity1,$amountkg1,$total1,$date);
}

if( $_POST['item6']!="" && $_POST['category6']!="" && $_POST['quantity6']!="" && $_POST['amountkg6']!="" && $_POST['total6']!="" )
{	
	$date = $_POST['date'];
	$item1=$_POST['item6'];
	$category1=$_POST['category6'];
	$quantity1=$_POST['quantity6'];
	$amountkg1=$_POST['amountkg6'];
	$total1=$_POST['total6'];

	ins($item1,$category1,$quantity1,$amountkg1,$total1,$date);
}

if( $_POST['item7']!="" && $_POST['category7']!="" && $_POST['quantity7']!="" && $_POST['amountkg7']!="" && $_POST['total7']!="" )
{	
	$date = $_POST['date'];
	$item1=$_POST['item7'];
	$category1=$_POST['category7'];
	$quantity1=$_POST['quantity7'];
	$amountkg1=$_POST['amountkg7'];
	$total1=$_POST['total7'];

	ins($item1,$category1,$quantity1,$amountkg1,$total1,$date);
}

if( $_POST['item8']!="" && $_POST['category8']!="" && $_POST['quantity8']!="" && $_POST['amountkg8']!="" && $_POST['total8']!="" )
{	
	$date = $_POST['date'];
	$item1=$_POST['item8'];
	$category1=$_POST['category8'];
	$quantity1=$_POST['quantity8'];
	$amountkg1=$_POST['amountkg8'];
	$total1=$_POST['total8'];

	ins($item1,$category1,$quantity1,$amountkg1,$total1,$date);
}

if( $_POST['item9']!="" && $_POST['category9']!="" && $_POST['quantity9']!="" && $_POST['amountkg9']!="" && $_POST['total9']!="")
{	
	$date = $_POST['date'];
	$item1=$_POST['item9'];
	$category1=$_POST['category9'];
	$quantity1=$_POST['quantity9'];
	$amountkg1=$_POST['amountkg9'];
	$total1=$_POST['total9'];

	ins($item1,$category1,$quantity1,$amountkg1,$total1,$date);
}

if( $_POST['item10']!="" && $_POST['category10']!="" && $_POST['quantity10']!="" && $_POST['amountkg10']!="" && $_POST['total10']!="" )
{	
	$date = $_POST['date'];
	$item1=$_POST['item10'];
	$category1=$_POST['category10'];
	$quantity1=$_POST['quantity10'];
	$amountkg1=$_POST['amountkg10'];
	$total1=$_POST['total10'];

	ins($item1,$category1,$quantity1,$amountkg1,$total1,$date);
}

if($_POST['item11']!="" && $_POST['category11']!="" && $_POST['quantity11']!="" && $_POST['amountkg11']!="" && $_POST['total11']!="")
{	
	$date = $_POST['date'];
	$item1=$_POST['item11'];
	$category1=$_POST['category11'];
	$quantity1=$_POST['quantity11'];
	$amountkg1=$_POST['amountkg11'];
	$total1=$_POST['total11'];

	ins($item1,$category1,$quantity1,$amountkg1,$total1,$date);
}

if( $_POST['item12']!="" && $_POST['category12']!="" && $_POST['quantity12']!="" && $_POST['amountkg12']!="" && $_POST['total12']!="" )
{	
	$date = $_POST['date'];
	$item1=$_POST['item12'];
	$category1=$_POST['category12'];
	$quantity1=$_POST['quantity12'];
	$amountkg1=$_POST['amountkg12'];
	$total1=$_POST['total12'];

	ins($item1,$category1,$quantity1,$amountkg1,$total1,$date);
}

if( $_POST['item13']!="" && $_POST['category13']!="" && $_POST['quantity13']!="" && $_POST['amountkg13']!="" && $_POST['total13']!="" )
{	
	$date = $_POST['date'];
	$item1=$_POST['item13'];
	$category1=$_POST['category13'];
	$quantity1=$_POST['quantity13'];
	$amountkg1=$_POST['amountkg13'];
	$total1=$_POST['total13'];

	ins($item1,$category1,$quantity1,$amountkg1,$total1,$date);
}

if( $_POST['item14']!="" && $_POST['category14']!="" && $_POST['quantity14']!="" && $_POST['amountkg14']!="" && $_POST['total14']!="" )
{	
	$date = $_POST['date'];
	$item1=$_POST['item14'];
	$category1=$_POST['category14'];
	$quantity1=$_POST['quantity14'];
	$amountkg1=$_POST['amountkg14'];
	$total1=$_POST['total14'];

	ins($item1,$category1,$quantity1,$amountkg1,$total1,$date);
}

if($_POST['item15']!="" && $_POST['category15']!="" && $_POST['quantity15']!="" && $_POST['amountkg15']!="" && $_POST['total15']!="")
{	
	$date = $_POST['date'];
	$item1=$_POST['item15'];
	$category1=$_POST['category15'];
	$quantity1=$_POST['quantity15'];
	$amountkg1=$_POST['amountkg15'];
	$total1=$_POST['total15'];

	ins($item1,$category1,$quantity1,$amountkg1,$total1,$date);
}

echo "<script>window.alert('Data inserted Successfully');window.location.href='purchase.php';</script>";
?>
