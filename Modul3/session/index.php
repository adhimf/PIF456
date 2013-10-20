<!DOCTYPE html 
     PUBLIC "Binnervis 2011" 
     "Fauzul Adhim - 110533430541"> 
<html> 
 
<head> 
  <title>Halaman Administrator</title> 
  <style type="text/css"> 
  		.border {
		border: 2px solid blue;
		background: Lime;
		margin: auto;
		width: 300px;
		height: 300px;
		margin-top:100px;
		}

		body {
		background-color: Lawngreen;
		}
		--> 
 
  </style > 
</head> 
 
<body bgcolor="cyan"> 
 
<?php 
session_start();
if(isset($_SESSION['user'])){
	$user = $_SESSION['user'];
	echo	'<p align="right">
			<a href="tugas.php">Logout</a>
			'.$user.'
			</p color="red">
			<div class="border">
			<p align="center">
			<font color="blue" size="14">
			Selamat Datang Admin <br/><br/>:)
			<br/><br>
			</font>
			</p>
			</div> 
			
			';
	} else {
		header('location:tugas.php');
		exit;
	}
?>
</body>
</html>