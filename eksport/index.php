<!DOCTYPE html>
<html>
<head> 
	<title>  Akses dan Manipulasi Data </title> 
	<style type="text/css">
	.even {
	background: #FFF0F5;
	}
	</style>
</head>

<body> 
<h1 align="center">Tugas Praktikum Pemrograman Web</h1>
<h3 align="center"> S1 Pendidikan Teknik Informatika 2011 -  Universitas Negeri Malang </h3>
<hr color="blue">
<?php
ini_set('display_error',1);
define('VALID', 1);

require_once('./auth.php');

init_login();
validate();

require_once './koneksi.php';
require_once './datahandler.php';
define('MHS', 'mahasiswa');

data_handler('?m=data');
?>
</body>
</html>

