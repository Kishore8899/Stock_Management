<?php
session_start();
if(!isset($_SESSION['uname']))
{
	echo "<script>window.location.href='index.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head><title>Add Vendor</title></head>
<body>
<form action="addvendorbck.php" method="post">
<input type="text" name="vendor" placeholder="Name of the vendor"/>
<input type="submit" value="ADD"/>
</form>
</body></html>