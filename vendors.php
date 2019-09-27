<?php 
session_start();
if(!isset($_SESSION['uname']))
{
echo "<script>window.location.href='index.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en"><head>
  <title>Stock Available</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<style>
body{
background-color:#CBFFC2;
}
</style>
</head>
<body>
<?php 
include 'nav.php';
?>
<div class="container">
  <center><h2>Add Vendor	</h2></center><hr>
  <form action="addvendorbck.php" method="POST">
            <label for="name" id="tab">Enter Vendor Name:</label>
            <input type="text" id="name" class="form-control" name="vendor" placeholder="Add Vendor"><br>
            <center><button type="submit" class="btn btn-info">Submit</button></center>
        </form><hr>
		<center><h2>Remove Vendor	</h2></center><hr>
  <form action="removevendorbck.php" role="form" method="POST">
            <label for="name" id="tab">Enter Vendor Name:</label>
			<?php 
			$con=mysqli_connect("localhost","root","","stock");
			$x="vendor";
			$smt=$con->prepare("select * from admin where category=?");
			$smt->bind_param('s',$x);
			$smt->execute();
			$res=$smt->get_result();
			?>
			<select name="vendor" class="form-control">
			<?php
			while($row=$res->fetch_assoc())
			{
				echo "<option value='".$row['value']."'>".$row['value']."</option>";
			}
			
			?>
			</select>
            <br/>
            <center><button type="submit" class="btn btn-info">Submit</button></center>
        </form><hr>
  <table class="table table-bordered">
  <center><h2>List of Vendor	</h2></center><hr>
    <tr>
	<th style="text-align:center">List of Vendors</th>
	</tr>
	<?php
		$x="vendor";
		$smt=$con->prepare("select * from admin where category=?");
		$smt->bind_param('s',$x);
		$smt->execute();
		$res=$smt->get_result();
		while($row=$res->fetch_assoc())
		{
			echo "<tr><td style='text-align:center;color:indianred;font-size:20px'>".$row["value"] ."</td></tr>";
		}
		?>
      </table>
  <center><a href="homepage.php"><button type="submit" class="btn btn-success">Home</button></a></center>
</div>

</body></html>