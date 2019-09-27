<?php
session_start();
if(!isset($_SESSION['uname'])){
	header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>HOME-Stock Management System</title>
</head>
<body>
<h3>HOME-Stock Management System</h3>
<a href="enter.php"><h3>Purchase</h3></a>
<a href="disfnt.php"><h3>Dispatch</h3></a>
<a href="avai.php"><h3>Stock Available</h3></a>
<a href="cat.php"><h3>Daywise Report</h3></a>
<a href=""><h3>Itemwise Report</h3></a>
<a href=""><h3>Category wise report</h3></a>
</body>
</html>