<?php
session_start();
if(!isset($_SESSION['uname'])){
	header('Location: index.php');
}
$con=mysqli_connect("localhost","root","","stock");
$res=$con->query("select * from current");

?>
<!DOCTYPE html>
<html><head><title>Available Stock</title></head>
<body>
<?php 
include 'nav.php';
?>
<center>
<h3>Stock Available</h3>
<table border="2"> 
<tr><th>Item</th>
<th>Category</th>
<th>Quantity</th></tr>
<?php 
while($row=$res->fetch_assoc())
{
	echo "<tr>";
	echo "<td>".$row['item'] ."</td>";
	echo "<td>".$row['category'] ."</td>";
	echo "<td>".$row['quantity'] ."</td>";
	echo "</tr>";
}
?>
<button onclick="myFunction()">Print this page</button>
<script>
function myFunction() {
  window.print();
}
</script>
</table>
</center>
</body>