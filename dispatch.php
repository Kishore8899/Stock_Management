<?php
include 'nav.php';
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
  <style type="text/css">
	body{
		background-color:#CBFFC2;
	}
  	input{
  		margin-right: 10px;
  	}
  	.add-button {
  		background-color: #4CAF50; /* Green */
	    border: none;
	    color: white;
	    padding: 3px 2px;
	    text-align: center;
	    text-decoration: none;
	    display: inline-block;
	    font-size: 10px;
	    cursor: pointer;
  	}
  </style>
</head>
<body>
	<center><h3>Dispatch details</h3></center>
	<form action="disbck.php" method="post" name="entryForm">
		 <center>Enter the date:<input type="date" name="date"></center><br/>
		<br>
		<center><input type="text" name="name1" class="1" placeholder="Enter the item name" onchange="getQuantity(this)" />
		<input type="text" name="available1" disabled="true" />
		<input type="text" name="rmk1" placeholder="RMK"/>
		<input type="text" name="rmd1" placeholder="RMD"/>
		<input type="text" name="rmkcet1" placeholder="RMKCET"/>
		<input type="text" name="school1" placeholder="SCHOOL"/></center>
		<br>
		<center><div id="dynamic_data1"></div>
		<div onclick="addForm()" class="add-button">ADD</div></center>
		<br>
		<center><input type="submit"></center>
	</form>


	<script type="text/javascript">
		var counter = 2;
		function addForm(){
			node="";
			node+= '<input type="text" name="name'+counter+'" class='+counter+' placeholder="Enter the item name" onchange="getQuantity(this)" value=""/><input type="text" name="available'+counter+'" disabled="true" /><input type="text" name="rmk'+counter+'" placeholder="RMK"/><input type="text" name="rmd'+counter+'" placeholder="RMD"/><input type="text" name="rmkcet'+counter+'" placeholder="RMKCET"/><input type="text" name="school'+counter+'" placeholder="SCHOOL"/><br><br><div id="dynamic_data'+counter+'"></div>';
			document.getElementById('dynamic_data'+(counter-1)).innerHTML += node;
			counter++;
		}

		function getQuantity(node){
			var itemNumber = node.className;
			var item = node.value;
			console.log(item);
  			var xhttp = new XMLHttpRequest();
  			xhttp.onreadystatechange = function() {
    			if (this.readyState == 4 && this.status == 200) {
      				document.forms["entryForm"]["available"+itemNumber].value = this.responseText;
    			}
  			};
		    xhttp.open("POST", "available-stock-particular-item.php", true);
  			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  			var params = "item="+item;
  			xhttp.send(params);
		}
	</script>
</body>
</html>