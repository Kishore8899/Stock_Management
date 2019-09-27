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
<title>Dispatch</title>


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
<body onload="hide()">
<div class="container-fluid">
<?php 
include 'nav.php';
?>

<center><h3>Dispatch details</h3></center>
  <hr>
  <form action="disbck.php" method="post" name="myForm">
  <center>Enter the date:<input type="date" name="date"></center><br/>
    <center><div class="form-inline">
      <input type="text" class="form-control" name="item" placeholder="Enter the name of item " onchange="getQuantity()">
      <input type="text" class="form-control" name="quantity" placeholder="Enter the quantity of item ">
	<select name="place" class="form-control">
		<option value="RMK">RMK</option>
		<option value="RMD">RMD</option>
		<option value="RMKCET">RMKCET</option>
		<option value="SCHOOL">SCHOOL</option>
	</select>
    </div></center>
	<br/> <center><div id="but1"> <button type="button" onclick="add1()"><div class="glyphicon glyphicon-plus"></div></button></div></center>


<div id="id1">
<center>    <div class="form-inline">
      <input type="text" class="form-control"  placeholder="Enter the name of item " name="item1">
     <input type="text" class="form-control" placeholder="Enter the quantity of item" name="quantity1">
	 <select name="place1" class="form-control">
	<option value="RMK">RMK</option>
	<option value="RMD">RMD</option>
	<option value="RMKCET">RMKCET</option>
	<option value="SCHOOL">SCHOOL</option>
	</select></div>
     </center>
<br/> <center><div id="but2"> <button type="button" onclick="add2()"><div class="glyphicon glyphicon-plus"></div></button></div></center>

</div>


<div id="id2">
<center>    <div class="form-inline">
      <input type="text" class="form-control"  placeholder="Enter the name of item " name="item2">
     <input type="text" class="form-control" placeholder="Enter the quantity of item" name="quantity2">
	 <select name="place2" class="form-control">
	<option value="RMK">RMK</option>
	<option value="RMD">RMD</option>
	<option value="RMKCET">RMKCET</option>
	<option value="SCHOOL">SCHOOL</option>
	</select></div>
     </center>
<br/> <center><div id="but3"> <button type="button" onclick="add3()"><div class="glyphicon glyphicon-plus"></div></button></div></center>

</div>


<div id="id3">
<center>    <div class="form-inline">
      <input type="text" class="form-control"  placeholder="Enter the name of item " name="item3">
     <input type="text" class="form-control" placeholder="Enter the quantity of item" name="quantity3">
	 <select name="place3" class="form-control">
	<option value="RMK">RMK</option>
	<option value="RMD">RMD</option>
	<option value="RMKCET">RMKCET</option>
	<option value="SCHOOL">SCHOOL</option>
	</select></div>
     </center>
<br/> <center><div id="but4"> <button type="button" onclick="add4()"><div class="glyphicon glyphicon-plus"></div></button></div></center>

</div>


<div id="id4">
<center>    <div class="form-inline">
      <input type="text" class="form-control"  placeholder="Enter the name of item " name="item4">
     <input type="text" class="form-control" placeholder="Enter the quantity of item" name="quantity4">
	 <select name="place4" class="form-control">
	<option value="RMK">RMK</option>
	<option value="RMD">RMD</option>
	<option value="RMKCET">RMKCET</option>
	<option value="SCHOOL">SCHOOL</option>
	</select></div>
     </center>
<br/> <center><div id="but5"> <button type="button" onclick="add5()"><div class="glyphicon glyphicon-plus"></div></button></div></center>

</div>


<div id="id5">
<center>    <div class="form-inline">
      <input type="text" class="form-control"  placeholder="Enter the name of item " name="item5">
     <input type="text" class="form-control" placeholder="Enter the quantity of item" name="quantity5">
	 <select name="place5" class="form-control">
	<option value="RMK">RMK</option>
	<option value="RMD">RMD</option>
	<option value="RMKCET">RMKCET</option>
	<option value="SCHOOL">SCHOOL</option>
	</select></div>
     </center>
<br/> <center><div id="but6"> <button type="button" onclick="add6()"><div class="glyphicon glyphicon-plus"></div></button></div></center>
</div>


<div id="id6">
<center>    <div class="form-inline">
      <input type="text" class="form-control"  placeholder="Enter the name of item " name="item6">
     <input type="text" class="form-control" placeholder="Enter the quantity of item" name="quantity6">
	 <select name="place6" class="form-control">
	<option value="RMK">RMK</option>
	<option value="RMD">RMD</option>
	<option value="RMKCET">RMKCET</option>
	<option value="SCHOOL">SCHOOL</option>
	</select></div>
     </center>
<br/> <center><div id="but7"> <button type="button" onclick="add7()"><div class="glyphicon glyphicon-plus"></div></button></div></center>
</div>


<div id="id7">
<center>    <div class="form-inline">
      <input type="text" class="form-control"  placeholder="Enter the name of item " name="item7">
     <input type="text" class="form-control" placeholder="Enter the quantity of item" name="quantity7">
	 <select name="place7" class="form-control">
	<option value="RMK">RMK</option>
	<option value="RMD">RMD</option>
	<option value="RMKCET">RMKCET</option>
	<option value="SCHOOL">SCHOOL</option>
	</select></div>
     </center>
<br/> <center><div id="but8"> <button type="button" onclick="add8()"><div class="glyphicon glyphicon-plus"></div></button></div></center>
</div>


<div id="id8">
<center>    <div class="form-inline">
      <input type="text" class="form-control"  placeholder="Enter the name of item " name="item8">
     <input type="text" class="form-control" placeholder="Enter the quantity of item" name="quantity8">
	 <select name="place8" class="form-control">
	<option value="RMK">RMK</option>
	<option value="RMD">RMD</option>
	<option value="RMKCET">RMKCET</option>
	<option value="SCHOOL">SCHOOL</option>
	</select></div>
     </center>
<br/> <center><div id="but9"> <button type="button" onclick="add9()"><div class="glyphicon glyphicon-plus"></div></button></div></center>
</div>

<div id="id9">
<center>    <div class="form-inline">
      <input type="text" class="form-control"  placeholder="Enter the name of item " name="item9">
     <input type="text" class="form-control" placeholder="Enter the quantity of item" name="quantity9">
	 <select name="place9" class="form-control">
	<option value="RMK">RMK</option>
	<option value="RMD">RMD</option>
	<option value="RMKCET">RMKCET</option>
	<option value="SCHOOL">SCHOOL</option>
	</select></div>
     </center>
<br/> <center><div id="but10"> <button type="button" onclick="add10()"><div class="glyphicon glyphicon-plus"></div></button></div></center>
</div>


<div id="id10">
<center>    <div class="form-inline">
      <input type="text" class="form-control"  placeholder="Enter the name of item " name="item10">
     <input type="text" class="form-control" placeholder="Enter the quantity of item" name="quantity10">
	 <select name="place10" class="form-control">
	<option value="RMK">RMK</option>
	<option value="RMD">RMD</option>
	<option value="RMKCET">RMKCET</option>
	<option value="SCHOOL">SCHOOL</option>
	</select></div>
     </center>
<br/> <center><div id="but11"> <button type="button" onclick="add11()"><div class="glyphicon glyphicon-plus"></div></button></div></center>
</div>

<div id="id11">
<center>    <div class="form-inline">
      <input type="text" class="form-control"  placeholder="Enter the name of item " name="item11">
     <input type="text" class="form-control" placeholder="Enter the quantity of item" name="quantity11">
	 <select name="place11" class="form-control">
	<option value="RMK">RMK</option>
	<option value="RMD">RMD</option>
	<option value="RMKCET">RMKCET</option>
	<option value="SCHOOL">SCHOOL</option>
	</select></div>
     </center>
<br/> <center><div id="but12"> <button type="button" onclick="add12()"><div class="glyphicon glyphicon-plus"></div></button></div></center>
</div>


<div id="id12">
<center>    <div class="form-inline">
      <input type="text" class="form-control"  placeholder="Enter the name of item " name="item12">
     <input type="text" class="form-control" placeholder="Enter the quantity of item" name="quantity12">
	 <select name="place12" class="form-control">
	<option value="RMK">RMK</option>
	<option value="RMD">RMD</option>
	<option value="RMKCET">RMKCET</option>
	<option value="SCHOOL">SCHOOL</option>
	</select></div>
     </center>
<br/> <center><div id="but13"> <button type="button" onclick="add13()"><div class="glyphicon glyphicon-plus"></div></button></div></center>
</div>

<div id="id13">
<center>    <div class="form-inline">
      <input type="text" class="form-control"  placeholder="Enter the name of item " name="item13">
     <input type="text" class="form-control" placeholder="Enter the quantity of item" name="quantity13">
	 <select name="place13" class="form-control">
	<option value="RMK">RMK</option>
	<option value="RMD">RMD</option>
	<option value="RMKCET">RMKCET</option>
	<option value="SCHOOL">SCHOOL</option>
	</select></div>
     </center>
<br/> <center><div id="but14"> <button type="button" onclick="add14()"><div class="glyphicon glyphicon-plus"></div></button></div></center>
</div>

<div id="id14">
<center>    <div class="form-inline">
      <input type="text" class="form-control"  placeholder="Enter the name of item " name="item14">
     <input type="text" class="form-control" placeholder="Enter the quantity of item" name="quantity14">
	 <select name="place14" class="form-control">
	<option value="RMK">RMK</option>
	<option value="RMD">RMD</option>
	<option value="RMKCET">RMKCET</option>
	<option value="SCHOOL">SCHOOL</option>
	</select></div>
     </center>
<br/>

</div>

  <center><button type="submit" class="btn btn-info">Dispatch</button></center>
</form>
<center><a href="homepage.php">Home</a></center>
</div>

 <script>
function hide(){
	document.getElementById("id1").style.display="none";
	document.getElementById("id2").style.display="none";
	document.getElementById("id3").style.display="none";
	document.getElementById("id4").style.display="none";
	document.getElementById("id5").style.display="none";
	document.getElementById("id6").style.display="none";
	document.getElementById("id7").style.display="none";
	document.getElementById("id8").style.display="none";
	document.getElementById("id9").style.display="none";
	document.getElementById("id10").style.display="none";
	document.getElementById("id11").style.display="none";
	document.getElementById("id12").style.display="none";
	document.getElementById("id13").style.display="none";
	document.getElementById("id14").style.display="none";
	
} 

  function add1(){
	document.getElementById("id1").style.display="block";
	document.getElementById("but1").style.display="none";
  }
  function add2(){
	document.getElementById("id2").style.display="block";
	document.getElementById("but2").style.display="none";
  }
  function add3(){
	document.getElementById("id3").style.display="block";
	document.getElementById("but3").style.display="none";
  }
  function add4(){
	document.getElementById("id4").style.display="block";
	document.getElementById("but4").style.display="none";
  }
  function add5(){
	document.getElementById("id5").style.display="block";
	document.getElementById("but5").style.display="none";
  }
  function add6(){
	document.getElementById("id6").style.display="block";
	document.getElementById("but6").style.display="none";
  }
  function add7(){
	document.getElementById("id7").style.display="block";
	document.getElementById("but7").style.display="none";
  }
  function add8(){
	document.getElementById("id8").style.display="block";
	document.getElementById("but8").style.display="none";
  }
  function add9(){
	document.getElementById("id9").style.display="block";
	document.getElementById("but9").style.display="none";
  }
  function add10(){
	document.getElementById("id10").style.display="block";
	document.getElementById("but10").style.display="none";
  }
  function add11(){
	document.getElementById("id11").style.display="block";
	document.getElementById("but11").style.display="none";
  }
    function add12(){
	document.getElementById("id12").style.display="block";
	document.getElementById("but12").style.display="none";
  }
    function add13(){
	document.getElementById("id13").style.display="block";
	document.getElementById("but13").style.display="none";
  }
    function add14(){
	document.getElementById("id14").style.display="block";
	document.getElementById("but14").style.display="none";
  }

 /* function getQuantity(){
  	var item = document.forms["myForm"]["item"].value;
  	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.forms["myForm"]["quantity"].value= this.responseText;
    }
  };
  xhttp.open("POST", "available-stock-particular-item.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  var params = "item="+item;
  xhttp.send(params);
  }*/

</script>

</body>
</html>
