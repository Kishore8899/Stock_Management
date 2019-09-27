<?php
session_start();
if(!isset($_SESSION['uname']))
{
echo "<script>window.location.href='index.php';</script>";
}
$con=mysqli_connect("localhost","root","","stock");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Purchase</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>body{
background-color:#CBFFC2;
}</style>
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
  function sum1(){
    var x=document.forms["f1"]["quantity1"].value;
	var y=document.forms["f1"]["amountkg1"].value;
	var z=x*y;
	document.forms["f1"]["total1"].value=z.toFixed(2);
  }
    function sum2(){
    var x=document.forms["f1"]["quantity2"].value;
	var y=document.forms["f1"]["amountkg2"].value;
	var z=x*y;
	document.forms["f1"]["total2"].value=z.toFixed(2);
  }
    function sum3(){
    var x=document.forms["f1"]["quantity3"].value;
	var y=document.forms["f1"]["amountkg3"].value;
	var z=x*y;
	document.forms["f1"]["total3"].value=z.toFixed(2);
  }
    function sum4(){
    var x=document.forms["f1"]["quantity4"].value;
	var y=document.forms["f1"]["amountkg4"].value;
	var z=x*y;
	document.forms["f1"]["total4"].value=z.toFixed(2);
  }
    function sum5(){
    var x=document.forms["f1"]["quantity5"].value;
	var y=document.forms["f1"]["amountkg5"].value;
	var z=x*y;
	document.forms["f1"]["total5"].value=z.toFixed(2);
  }
    function sum6(){
    var x=document.forms["f1"]["quantity6"].value;
	var y=document.forms["f1"]["amountkg6"].value;
	var z=x*y;
	document.forms["f1"]["total6"].value=z.toFixed(2);
  }
    function sum7(){
    var x=document.forms["f1"]["quantity7"].value;
	var y=document.forms["f1"]["amountkg7"].value;
	var z=x*y;
	document.forms["f1"]["total7"].value=z.toFixed(2);
  }
    function sum8(){
    var x=document.forms["f1"]["quantity8"].value;
	var y=document.forms["f1"]["amountkg8"].value;
	var z=x*y;
	document.forms["f1"]["total8"].value=z.toFixed(2);
  }
    function sum9(){
    var x=document.forms["f1"]["quantity9"].value;
	var y=document.forms["f1"]["amountkg9"].value;
	var z=x*y;
	document.forms["f1"]["total9"].value=z.toFixed(2);
  }
    function sum10(){
    var x=document.forms["f1"]["quantity10"].value;
	var y=document.forms["f1"]["amountkg10"].value;
	var z=x*y;
	document.forms["f1"]["total10"].value=z.toFixed(2);
  }
    function sum11(){
    var x=document.forms["f1"]["quantity11"].value;
	var y=document.forms["f1"]["amountkg11"].value;
	var z=x*y;
	document.forms["f1"]["total11"].value=z.toFixed(2);
  }
    function sum12(){
    var x=document.forms["f1"]["quantity12"].value;
	var y=document.forms["f1"]["amountkg12"].value;
	var z=x*y;
	document.forms["f1"]["total12"].value=z.toFixed(2);
  }
    function sum13(){
    var x=document.forms["f1"]["quantity13"].value;
	var y=document.forms["f1"]["amountkg13"].value;
	var z=x*y;
	document.forms["f1"]["total13"].value=z.toFixed(2);
  }
    function sum14(){
    var x=document.forms["f1"]["quantity14"].value;
	var y=document.forms["f1"]["amountkg14"].value;
	var z=x*y;
	document.forms["f1"]["total14"].value=z.toFixed(2);
  }
    function sum15(){
    var x=document.forms["f1"]["quantity15"].value;
	var y=document.forms["f1"]["amountkg15"].value;
	var z=x*y;
	document.forms["f1"]["total15"].value=z.toFixed(2);
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
 </script> 
  </head>
<body onload="hide()">
<div class="container-fluid">
<?php 
include 'nav.php';
?>

  <center><h2>Enter the Item</h2></center><br/>
  <form  action="fil.php" name="f1" method="post">
  <center>Enter the date: <input type="date" name="date" placeholder="Select date"/></center><br/>
<center>    <div class="form-inline">
     <input type="text" class="form-control"  placeholder="Enter the item name" name="item1" id="pop1" onchange="show1()">
     <script>
 	function show1()
 	{
     	var x;
     	x=document.getElementById("pop1").value;
     	var xhttp = new XMLHttpRequest();
 		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.forms["f1"]["category1"].value=this.responseText;
    	}
  		};
  		xhttp.open("GET", "category_search.php?item="+x, true); 
  		xhttp.send(); 
     
     }
     </script>
      <input type="text" class="form-control"  placeholder="Category" onchange="sum1()" name="category1">
     
      <input type="text" class="form-control"  placeholder="Enter the quantity of item " onchange="sum1()" name="quantity1">
     <input type="text" class="form-control" placeholder="Enter the Amount per kg" onchange="sum1()" name="amountkg1">
     <input type="text" class="form-control"  placeholder="Total Amount" name="total1">
   </div></center>
 <br/> <center><div id="but1"> <button type="button" onclick="add1()"><div class="glyphicon glyphicon-plus"></div></button></div></center>
<br/>

<div id="id1">
<center>    <div class="form-inline">
    <input type="text" class="form-control"  placeholder="Enter the item name" name="item2" id="pop2" onchange="show2()">
     <script>
 	function show2()
 	{
     	var x;
     	x=document.getElementById("pop2").value;
     	var xhttp = new XMLHttpRequest();
 		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.forms["f1"]["category2"].value=this.responseText;
    	}
  		};
  		xhttp.open("GET", "category_search.php?item="+x, true);
  		xhttp.send(); 
     
     }
     </script>
      <input type="text" class="form-control"  placeholder="Category" onchange="sum2()" name="category2">

      <input type="text" class="form-control"  placeholder="Enter the qualtity of item" onchange="sum2()" name="quantity2">
     <input type="text" class="form-control" placeholder="Enter the Amount per kg" onchange="sum2()" name="amountkg2">
     <input type="text" class="form-control"  placeholder="Total Amount" name="total2">
   </div></center>
<br/>
<br/> <center><div id="but2"> <button type="button" onclick="add2()"><div class="glyphicon glyphicon-plus"></div></button></div></center>

</div>


<div id="id2">
<center>    <div class="form-inline">
     <input type="text" class="form-control"  placeholder="Enter the item name" name="item3" id="pop3" onchange="show3()">
     <script>
 	function show3()
 	{
     	var x;
     	x=document.getElementById("pop3").value;
     	var xhttp = new XMLHttpRequest();
 		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.forms["f1"]["category3"].value=this.responseText;
    	}
  		};
  		xhttp.open("GET", "category_search.php?item="+x, true);
  		xhttp.send(); 
     
     }
     </script>
      <input type="text" class="form-control"  placeholder="Category" onchange="sum3()" name="category3">

      <input type="text" class="form-control"  placeholder="Enter the qualtity of item " onchange="sum3()" name="quantity3">
     <input type="text" class="form-control" placeholder="Enter the Amount per kg" onchange="sum3()" name="amountkg3">
     <input type="text" class="form-control"  placeholder="Total Amount" name="total3">
   </div></center>
<br/><br/> <center><div id="but3"> <button type="button" onclick="add3()"><div class="glyphicon glyphicon-plus"></div></button></div></center>

</div>


<div id="id3">
<center>    <div class="form-inline">
     <input type="text" class="form-control"  placeholder="Enter the item name" name="item4" id="pop4" onchange="show4()">
     <script>
 	function show4()
 	{
     	var x;
     	x=document.getElementById("pop4").value;
     	var xhttp = new XMLHttpRequest();
 		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.forms["f1"]["category4"].value=this.responseText;
    	}
  		};
  		xhttp.open("GET", "category_search.php?item="+x, true);
  		xhttp.send(); 
     
     }
     </script>
      <input type="text" class="form-control"  placeholder="Category" onchange="sum4()" name="category4">

      <input type="text" class="form-control"  placeholder="Enter the qualtity of item " onchange="sum4()" name="quantity4">
     <input type="text" class="form-control" placeholder="Enter the Amount per kg" onchange="sum4()" name="amountkg4">
     <input type="text" class="form-control"  placeholder="Total Amount" name="total4">
   </div></center>
<br/><br/> <center><div id="but4"> <button type="button" onclick="add4()"><div class="glyphicon glyphicon-plus"></div></button></div></center>

</div>


<div id="id4">
<center>    <div class="form-inline">
     <input type="text" class="form-control"  placeholder="Enter the item name" name="item5" id="pop5" onchange="show5()">
     <script>
 	function show5()
 	{
     	var x;
     	x=document.getElementById("pop5").value;
     	var xhttp = new XMLHttpRequest();
 		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.forms["f1"]["category5"].value=this.responseText;
    	}
  		};
  		xhttp.open("GET", "category_search.php?item="+x, true);
  		xhttp.send(); 
     
     }
     </script>
      <input type="text" class="form-control"  placeholder="Category" onchange="sum5()" name="category5">

      <input type="text" class="form-control"  placeholder="Enter the qualtity of item " onchange="sum5()" name="quantity5">
     <input type="text" class="form-control" placeholder="Enter the Amount per kg" onchange="sum5()" name="amountkg5">
     <input type="text" class="form-control"  placeholder="Total Amount" name="total5">
   </div></center>
<br/><br/> <center><div id="but5"> <button type="button" onclick="add5()"><div class="glyphicon glyphicon-plus"></div></button></div></center>

</div>

<div id="id5">
<center>    <div class="form-inline">
     <input type="text" class="form-control"  placeholder="Enter the item name" name="item6" id="pop6" onchange="show6()">
     <script>
 	function show6()
 	{
     	var x;
     	x=document.getElementById("pop6").value;
     	var xhttp = new XMLHttpRequest();
 		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.forms["f1"]["category6"].value=this.responseText;
    	}
  		};
  		xhttp.open("GET", "category_search.php?item="+x, true);
  		xhttp.send(); 
     
     }
     </script>
      <input type="text" class="form-control"  placeholder="Category" onchange="sum6()" name="category6">

      <input type="text" class="form-control"  placeholder="Enter the qualtity of item " onchange="sum6()" name="quantity6">
     <input type="text" class="form-control" placeholder="Enter the Amount per kg" onchange="sum6()" name="amountkg6">
     <input type="text" class="form-control"  placeholder="Total Amount" name="total6">
   </div></center>
<br/><br/> <center><div id="but6"> <button type="button" onclick="add6()"><div class="glyphicon glyphicon-plus"></div></button></div></center>

</div>

<div id="id6">
<center>    <div class="form-inline">
     <input type="text" class="form-control"  placeholder="Enter the item name" name="item7" id="pop7" onchange="show7()">
     <script>
 	function show7()
 	{
     	var x;
     	x=document.getElementById("pop7").value;
     	var xhttp = new XMLHttpRequest();
 		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.forms["f1"]["category7"].value=this.responseText;
    	}
  		};
  		xhttp.open("GET", "category_search.php?item="+x, true);
  		xhttp.send(); 
     
     }
     </script>
      <input type="text" class="form-control"  placeholder="Category" onchange="sum7()" name="category7">

      <input type="text" class="form-control"  placeholder="Enter the qualtity of item " onchange="sum7()" name="quantity7">
     <input type="text" class="form-control" placeholder="Enter the Amount per kg" onchange="sum7()" name="amountkg7">
     <input type="text" class="form-control"  placeholder="Total Amount" name="total7">
   </div></center>
<br/><br/> <center><div id="but7"> <button type="button" onclick="add7()"><div class="glyphicon glyphicon-plus"></div></button></div></center>

</div>


<div id="id7">
<center>    <div class="form-inline">
    <input type="text" class="form-control"  placeholder="Enter the item name" name="item8" id="pop8" onchange="show8()">
     <script>
 	function show8()
 	{
     	var x;
     	x=document.getElementById("pop8").value;
     	var xhttp = new XMLHttpRequest();
 		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.forms["f1"]["category8"].value=this.responseText;
    	}
  		};
  		xhttp.open("GET", "category_search.php?item="+x, true);
  		xhttp.send(); 
     
     }
     </script>
      <input type="text" class="form-control"  placeholder="Category" onchange="sum8()" name="category8">

      <input type="text" class="form-control"  placeholder="Enter the qualtity of item " onchange="sum8()" name="quantity8">
     <input type="text" class="form-control" placeholder="Enter the Amount per kg" onchange="sum8()" name="amountkg8">
     <input type="text" class="form-control"  placeholder="Total Amount" name="total8">
   </div></center>
<br/><br/> <center><div id="but8"> <button type="button" onclick="add8()"><div class="glyphicon glyphicon-plus"></div></button></div></center>

</div>
<div id="id8">
<center>    <div class="form-inline">
    <input type="text" class="form-control"  placeholder="Enter the item name" name="item9" id="pop9" onchange="show9()">
     <script>
 	function show9()
 	{
     	var x;
     	x=document.getElementById("pop9").value;
     	var xhttp = new XMLHttpRequest();
 		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.forms["f1"]["category9"].value=this.responseText;
    	}
  		};
  		xhttp.open("GET", "category_search.php?item="+x, true);
  		xhttp.send(); 
     
     }
     </script>
      <input type="text" class="form-control"  placeholder="Category" onchange="sum9()" name="category9">

      <input type="text" class="form-control"  placeholder="Enter the qualtity of item " onchange="sum9()" name="quantity9">
     <input type="text" class="form-control" placeholder="Enter the Amount per kg" onchange="sum9()" name="amountkg9">
     <input type="text" class="form-control"  placeholder="Total Amount" name="total9">
   </div></center>
<br/><br/> <center><div id="but9"> <button type="button" onclick="add9()"><div class="glyphicon glyphicon-plus"></div></button></div></center>

</div>
<div id="id9">
<center>    <div class="form-inline">
    <input type="text" class="form-control"  placeholder="Enter the item name" name="item10" id="pop10" onchange="show10()">
     <script>
 	function show10()
 	{
     	var x;
     	x=document.getElementById("pop10").value;
     	var xhttp = new XMLHttpRequest();
 		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.forms["f1"]["category10"].value=this.responseText;
    	}
  		};
  		xhttp.open("GET", "category_search.php?item="+x, true);
  		xhttp.send(); 
     
     }
     </script>
      <input type="text" class="form-control"  placeholder="Category" onchange="sum10()" name="category10">

      <input type="text" class="form-control"  placeholder="Enter the qualtity of item " onchange="sum10()" name="quantity10">
     <input type="text" class="form-control" placeholder="Enter the Amount per kg" onchange="sum10()" name="amountkg10">
     <input type="text" class="form-control"  placeholder="Total Amount" name="total10">
   </div></center>
<br/><br/> <center><div id="but10"> <button type="button" onclick="add10()"><div class="glyphicon glyphicon-plus"></div></button></div></center>

</div>
<div id="id10">
<center>    <div class="form-inline">
    <input type="text" class="form-control"  placeholder="Enter the item name" name="item11" id="pop11" onchange="show11()">
     <script>
 	function show11()
 	{
     	var x;
     	x=document.getElementById("pop11").value;
     	var xhttp = new XMLHttpRequest();
 		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.forms["f1"]["category11"].value=this.responseText;
    	}
  		};
  		xhttp.open("GET", "category_search.php?item="+x, true);
  		xhttp.send(); 
     
     }
     </script>
      <input type="text" class="form-control"  placeholder="Category" onchange="sum11()" name="category11">

      <input type="text" class="form-control"  placeholder="Enter the qualtity of item " onchange="sum11()" name="quantity11">
     <input type="text" class="form-control" placeholder="Enter the Amount per kg" onchange="sum11()" name="amountkg11">
     <input type="text" class="form-control"  placeholder="Total Amount" name="total11">
   </div></center>
<br/><br/> <center><div id="but11"> <button type="button" onclick="add11()"><div class="glyphicon glyphicon-plus"></div></button></div></center>

</div>
<div id="id11">
<center>    <div class="form-inline">
     <input type="text" class="form-control"  placeholder="Enter the item name" name="item12" id="pop12" onchange="show12()">
     <script>
 	function show12()
 	{
     	var x;
     	x=document.getElementById("pop12").value;
     	var xhttp = new XMLHttpRequest();
 		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.forms["f1"]["category12"].value=this.responseText;
    	}
  		};
  		xhttp.open("GET", "category_search.php?item="+x, true);
  		xhttp.send(); 
     
     }
     </script>
      <input type="text" class="form-control"  placeholder="Category" onchange="sum12()" name="category12">

      <input type="text" class="form-control"  placeholder="Enter the qualtity of item " onchange="sum12()" name="quantity12">
     <input type="text" class="form-control" placeholder="Enter the Amount per kg" onchange="sum12()" name="amountkg12">
     <input type="text" class="form-control"  placeholder="Total Amount" name="total12">
   </div></center>
<br/><br/> <center><div id="but12"> <button type="button" onclick="add12()"><div class="glyphicon glyphicon-plus"></div></button></div></center>

</div>


<div id="id12">
<center>    <div class="form-inline">
     <input type="text" class="form-control"  placeholder="Enter the item name" name="item13" id="pop13" onchange="show13()">
     <script>
 	function show13()
 	{
     	var x;
     	x=document.getElementById("pop13").value;
     	var xhttp = new XMLHttpRequest();
 		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.forms["f1"]["category13"].value=this.responseText;
    	}
  		};
  		xhttp.open("GET", "category_search.php?item="+x, true);
  		xhttp.send(); 
     
     }
     </script>
      <input type="text" class="form-control"  placeholder="Category" onchange="sum13()" name="category13">

      <input type="text" class="form-control"  placeholder="Enter the qualtity of item " onchange="sum13()" name="quantity13">
     <input type="text" class="form-control" placeholder="Enter the Amount per kg" onchange="sum13()" name="amountkg13">
     <input type="text" class="form-control"  placeholder="Total Amount" name="total13">
   </div></center>
<br/><br/> <center><div id="but13"> <button type="button" onclick="add13()"><div class="glyphicon glyphicon-plus"></div></button></div></center>

</div>


<div id="id13">
<center>    <div class="form-inline">
     <input type="text" class="form-control"  placeholder="Enter the item name" name="item14" id="pop14" onchange="show14()">
     <script>
 	function show14()
 	{
     	var x;
     	x=document.getElementById("pop14").value;
     	var xhttp = new XMLHttpRequest();
 		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.forms["f1"]["category14"].value=this.responseText;
    	}
  		};
  		xhttp.open("GET", "category_search.php?item="+x, true);
  		xhttp.send(); 
     
     }
     </script>
      <input type="text" class="form-control"  placeholder="Category" onchange="sum14()" name="category14">

      <input type="text" class="form-control"  placeholder="Enter the qualtity of item " onchange="sum14()" name="quantity14">
     <input type="text" class="form-control" placeholder="Enter the Amount per kg" onchange="sum14()" name="amountkg14">
     <input type="text" class="form-control"  placeholder="Total Amount" name="total14">
   </div></center>
<br/><br/> <center><div id="but14"> <button type="button" onclick="add14()"><div class="glyphicon glyphicon-plus"></div></button></div></center>

</div>


<div id="id14">
<center>    <div class="form-inline">
    <input type="text" class="form-control"  placeholder="Enter the item name" name="item15" id="pop15" onchange="show15()">
     <script>
 	function show15()
 	{
     	var x;
     	x=document.getElementById("pop15").value;
     	var xhttp = new XMLHttpRequest();
 		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.forms["f1"]["category15"].value=this.responseText;
    	}
  		};
  		xhttp.open("GET", "category_search.php?item="+x, true);
  		xhttp.send(); 
     
     }
     </script>
      <input type="text" class="form-control"  placeholder="Category" onchange="sum15()" name="category15">

      <input type="text" class="form-control"  placeholder="Enter the qualtity of item " onchange="sum15()" name="quantity15">
     <input type="text" class="form-control" placeholder="Enter the Amount per kg" onchange="sum15()" name="amountkg15">
     <input type="text" class="form-control"  placeholder="Total Amount" name="total15">
   </div></center>

</div><br/><br/>
   
    <center><button type="submit" class="btn btn-success">Submit</button></center>
  </form>
<center><a href="homepage.php">Home</a></center>
</div>
</body>
</html>
