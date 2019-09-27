<?php
session_start();
if(!isset($_SESSION['uname']))
{
	echo "<script>window.location.href='index.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head><title>Admin Home</title></head>
<body>
<a href="addcategory.php">Add category</a>
<a href="removecategory.php">Remove category</a>
<a href="viewcategory.php">View categories</a>
<a href="addvendor.php">Add vendor</a>
<a href="removevendor.php">Remove vendor</a>
<a href="viewvendor.php">View Vendors</a>
</body>
</html>