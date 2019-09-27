<?php
session_start();
if(!isset($_SESSION['uname']))
{
echo "<script>window.location.href='index.php';</script>";
}
$con=mysqli_connect("localhost","root","","stock");
$res=$con->query("select * from current");
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
th{
	color:indianred;
}
h2{
	color: violet;
}
</style>

</head>
<body>
<?php 
include 'nav.php';
?>

<div class="container">


  <center><h2>Stock Available</h2></center>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Item</th>
        <th>Category</th>
        <th>Quantity</th>
      </tr>
    </thead>
    <tbody>
	<?php
	while($row=$res->fetch_assoc())
    {
	   echo "<tr style='font-size:20px;'>";
       echo"<td>".$row['item'] ."</td>";
       echo"<td>".$row['category'] ."</td>";
       echo"<td>".$row['quantity'] ."</td>";
       echo"</tr>";
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