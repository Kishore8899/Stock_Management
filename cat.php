<?php
session_start();
if(!isset($_SESSION['uname']))
{
	header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head><title>Daily filter</title></head>
<body>
<form action="fi.php" method="post">
<input type="date" name="date1" />
<input type="date" name="date2" />
<input type="submit" value="Choose"/>
</form>
</body>
</html>