<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Generate Matriks Sel</title>
</head>
<body bgcolor="#aff9ee">
  
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <h3 align="center" class="style1">Generate Matriks Sel</h3>
    Jumlah kolom: <input type="text" name="kolom" />
	Jumlah sel: <input type="text" name="sel" />
    <input type="submit" name="Generate" value="Generate">
	
    <?php
      $cell = 1;
      if(isset($_POST['Generate'])):
	  $sel = $_POST["sel"];
	  $kolom = $_POST["kolom"];?>
	    <br /><br />
        <?php
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
  </form>
</body>
</html>
