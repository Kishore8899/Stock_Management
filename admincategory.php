<?php
session_start();
if(!isset($_SESSION['uname']))
{
echo "<script>window.location.href='index.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>

body {
    background-image: url("rmk22.gif");
    background-position: center;
	background-attachment:fixed;
    background-repeat: no-repeat;
    background-size: cover;
}
#new
{
	background-color:green;
}
</style>
</head>
<body>
<div class="container">
<div class="row">
	<div class="col-sm-6" id="new">
		
			Allllooo
		
	</div>
	<div class="col-sm-6" id="new">
		
			<?php  
					$con=mysqli_connect("localhost","root","","stock");
					$x="category";
					$smt=$con->prepare("select * from admin where category=?");
					$smt->bind_param('s',$x);
					$smt->execute();
					$res=$smt->get_result();
					while($row=$res->fetch_assoc())
					{
						echo "<p>".$row["value"] ."</p>";
					}
			?>
		
	</div>
</div>
</div>
</body>