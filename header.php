<!DOCTYPE html>
<html>
<head>
	<title>Php tutorial from Training with Live Project</title>


     <style>
     	.phpcoding{
     		width: 900px;
     		margin: 0 auto;
     		background-color: #ddd;
     		min-height: 400px;
     	}
.headeroption{
 background: #444;
 color: #fff;
 text-align: center;
 padding: 20px;
}
.headeroption h2,.footeroption h2 {margin: 0}
 .footeroption{
 background: #444;
 color: #fff;
 text-align: center;
 padding: 20px;
 }
 .mainContent{
 	min-height: 600px;
 	padding: 20px;
 }	

.tblone{
    width: 100%;
    border: 1px solid #fff;
    margin: 20px 0
}
.tblone td{
     padding: 5px 10px;
     text-align: center;
}
table.tblone tr:nth-child(even) {
    background-color: #f1f1f1;
    height: 30px;
}

table.tblone tr:nth-child(odd) {
    background-color: #fff;
    height: 30px;
}

 p{
 	margin: 0;
 }
     </style>
 
 

</head>
<body>
<div class="phpcoding">
     <section class="headeroption">
	     <h2>CRUD learning PHP MySQL</h2>
     </section>
  <section class="mainContent"> 
<hr>
<span style="float:left">How to fetch data from MySQL</span>
<span style="float:right">
	<?php 
	date_default_timezone_set('Europe/Berlin');
	echo "Time in Germany ".date("h:i:sa");
	 ?>
</span>
<br>
<hr>