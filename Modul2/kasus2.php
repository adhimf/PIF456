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
    Fakultas : 
    <input type="checkbox" name="Fakultas[]" value="Fakultas Teknik" 
		<?php
			if (isset($_POST['Fakultas']) && $_POST['Fakultas'] == 'Fakultas Teknik') {
				echo 'checked="checked"';
			}
		?>
    />Fakultas Teknik 
 
    <input type="checkbox" name="Fakultas[]" value="Fakultas MIPA" 
		<?php
			if (isset($_POST['Fakultas']) && $_POST['Fakultas'] == 'Fakultas MIPA') {
				echo 'checked="checked"';
			}
		?>
    />Fakultas MIPA
 
    <input type="checkbox" name="Fakultas[]" value="Fakultas Ekonomi" 
		<?php
			if (isset($_POST['Fakultas']) && $_POST['Fakultas'] == 'Fakultas Ekonomi') {
				echo 'checked="checked"';
			}
		?>
    />Fakultas Ekonomi <br /> 
 
    <input type="submit" value="ok" /> 
	</form> 
 
	</center>
 
	<?php 
	if (isset($_POST['Fakultas'])&& ($_POST['nama'])) { 
	  echo '<br /> Hallo, Nama Saya ' . $_POST['nama']; 
	  foreach ($_POST['Fakultas'] as $key => $val) { 
		echo ' , Saya Kuliah di ' .$val . ' Universitas Negeri Malang <br /><br />'; 
	  }
	} 
	?> 
	<hr color="GREEN" />
 	<p align="left"> <b>
	Fauzul Adhim <br/>
	PTI 2011 OFF.B </b> <br/>
</body> 