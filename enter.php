<?php
session_start();
if(!isset($_SESSION['uname']))
{
	header('Location: index.php');
}
?>
<!DOCTYPE html>
<html><head><title>Enter Stocks</title>
<script>
function calc(){
var x=document.forms["f1"]["amountkg1"].value;
x=Number(x);
var y=document.forms["f1"]["quantity1"].value;
y=Number(y);
var z;
z=x*y;
document.forms["f1"]["total1"].value=z;
}
</script>
</head>
<body>
<h1>Enter the items</h1>
<form action="fil.php" name="f1" method="post">
<input type="text" name="item1" placeholder="Item Name"/>
<input type="text" name="category1" placeholder="Item Category"/>
<input type="text" name="quantity1" onchange="calc()" placeholder="Item Quantity"/>
<input type="text" name="amountkg1" onchange="calc()" id="perkg" placeholder="Amount per kg"/>
<input type="text" name="total1" placeholder="Total amount" disabled/>
<input type="submit" value="Enter">
</form></body></html>
