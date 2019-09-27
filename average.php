<?php
session_start();
if(!isset($_SESSION['uname']))
{
echo "<script>window.location.href='index.php';</script>";
}
include 'nav.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Average Report</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<style>
    body{
background-color:#CBFFC2;
}
  th,td
  {
    border:2px solid black;
    border-collapse: collapse;
    width:1%;
    padding: 5px;
  }
</style>

</head>
<body>
	<?php
$x=$_POST['date1'];
$y=$_POST['date2'];

$con=mysqli_connect("localhost","root","","stock");
$smt=$con->prepare("select distinct(item) from purchase where date>=? and date<=?");
$smt->bind_param('ss',$x,$y);
$smt->execute();
$res=$smt->get_result();
?>
<h1 align="center">Average Report</h1>
<hr/>
<center>MONTH:    <input type="text" name="Month" value="<?php echo $_POST['date1'];?>" disabled /> <input type="text" name="Month" value="<?php echo $_POST['date2'];?>" disabled /></center><br/> 
<table align="center">
    <thead>
      <tr>
        <th>Item</th>
        <th>Quantity</th>
        <th>Amount</th>
        <th>Average</th>
      </tr>
    </thead>
    <tbody>
    	<?php
	while($row=$res->fetch_assoc())
    {
 	   $k=0;
	   echo "<tr>";
	   $itemname = $row['item'];
	echo "<td>".$itemname ."</td>";
	$smtinner=$con->prepare("select * from purchase where date>=? and date<=? and item=? ");
	$smtinner->bind_param('sss',$x,$y,$itemname);
	//echo $itemname;
	$smtinner->execute();
	$resinner=$smtinner->get_result();
	$x=0;
	if(mysqli_num_rows($resinner)>0){
		while($rowinner=$resinner->fetch_assoc()){
			$x+=$rowinner['quantity'];
		}
	}
	echo "<td>".$x ."</td>";


	$smtinner=$con->prepare("select * from purchase where date>=? and date<=? and item=? ");
	$smtinner->bind_param('sss',$x,$y,$itemname);
	$smtinner->execute();
	$resinner=$smtinner->get_result();
	$x=0;
	if(mysqli_num_rows($resinner)>0){
		while($rowinner=$resinner->fetch_assoc()){
			$x+=$rowinner['amount'];
		}
	}
	echo "<td>".$x ."</td>";
	
	$smtinner=$con->prepare("select * from purchase where date>=? and date<=? and item=? ");
	$smtinner->bind_param('sss',$x,$y,$itemname);
	$smtinner->execute();
	$resinner=$smtinner->get_result();
	$x=0;
	$y=0;
	$z=0;
	//$m;
	if(mysqli_num_rows($resinner)>0){
		$m=0;
		while($rowinner=$resinner->fetch_assoc()){
			$x=$rowinner['amountkg'];
			$y=$rowinner['quantity'];
			$z+=($x*$y);
			$m+=$y;
			
		}
	}
	$d=0;
	$d=$z/$m;
	echo "<td>".$d ."</td>";
	}
    ?>
     </tbody>
  </table>
  <center>
      <button onclick="myFunction()">Print this page</button>

<script>
function myFunction() {
  window.print();
}
</script>

   <br> <br>  <a href="homepage.php">Home</a></center>
</div>
</body>
</html>