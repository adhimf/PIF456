<!DOCTYPE html > 
<html> 
 
<head> 
  <title>Studi Kasus 1</title> 
</head> 
 
<body bgcolor="#aff9ee" style="width : 700px; margin:10px auto; background-attachment:fixed;">
	<p>
	<marquee  direction="right" bgcolor="GREEN" scrollamount="10" loop="20"> <font face="Time New Roman" size="6" color="white">S1 PTI off B 2011 | BINNERVIS </marquee> </font>
	<hr color="GREEN" />
	<p> <font face="Book Antiqua">
	
  <center>
  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
	Nama 
	<input type="text" name="nama" 
		value="<?php 
		echo isset($_POST['nama']) ? $_POST['nama'] : ''; 
		?>"
	/> <br /> 
    Fakultas 
    <select name="fakultas">
		<option value="Fakultas Teknik"<?php
		if (isset($_POST['fakultas'])&& $_POST['fakultas'] == 'Fakultas Teknik') {
			echo ' selected="selected"';
		}
		?>>Fakultas Teknik</option>
		
		<option value="Fakultas MIPA"<?php
		if (isset($_POST['fakultas'])&& $_POST['fakultas'] == 'Fakultas MIPA') {
			echo ' selected="selected"';
		}
		?>>Fakultas MIPA</option>
		
		<option value="Fakultas Ekonomi"<?php
		if (isset($_POST['fakultas'])&& $_POST['fakultas'] == 'Fakultas Ekonomi') {
			echo ' selected="selected"';
		}
		?>>Fakultas Ekonomi</option>
		
	</select> <br /> 
 
    <input type="submit" value="ok" /> 
	</form> 
 
	</center>
 
	<?php 
	if (isset($_POST['fakultas'])&& ($_POST['nama'])) { 
	  echo '<br /> Hallo, Nama Saya ' . $_POST['nama']; 
	  echo ', Saya Kuliah di ' . $_POST['fakultas']; 
	  echo ' Universitas Negeri Malang <br /><br />'; 
	} 
	?> 
	<hr color="GREEN" />
 	<p align="left"> <b>
	Fauzul Adhim <br/>
	PTI 2011 OFF.B </b> <br/>
</body> 