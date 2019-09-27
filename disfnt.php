<?php
session_start();
if(!isset($_SESSION['uname'])){
	header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head><title>Dispatch</title></head>
<body>
<h3>Dispatch page</h3>
<form action="disbck.php" method="post">
<input type="text" name="item" placeholder="Item Name"/>
<input type="text" name="quantity" placeholder="Quantity"/>
<select name="place">
<option value="RMKEC">RMKEC</option>
<option value="RMDEC">RMDEC</option>
<option value="RMKCET">RMKCET</option>
</select>
<input type="submit" value="Dispatch">
</form>
</body>
</html>