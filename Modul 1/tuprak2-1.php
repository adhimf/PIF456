<!DOCTYPE HTML>
<html>
<head>
	<title>Generate Tabel</title>
</head>
<body>
	<?php
	$cell = 1;
	$sel = $_POST["sel"];
	$kolom = $_POST["kolom"];
	echo '<table align=center border=1>';
	for($a = 0; $a < $sel; $a++){
		echo '<tr>';
		for($b = 0; $b < $kolom; $b++){
			if($cell != NULL){
				echo '<td><center>' . $cell . '</center></td>';
				if ($cell < $sel AND $cell != NULL){
					$cell = $cell +1;
				}else{
					$cell = NULL;
				}
			}
		}
		echo '</tr>';
	}
	echo '</table>';
	?>
	<br /><a href="tuprak2.php">[OK]</a>
</body>
</html>
