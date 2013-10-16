<html>
<head>
		<title>Studi Kasus 2</title>  
	</head>  
		<body bgcolor="cyan">   
		<h3>Membuat Tabel</h3>  
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
		Jumlah kolom: <input type="text" name="kolom" />
		Jumlah sel: <input type="text" name="sel" />
		<input type="submit" name="submit" />
		</form>  
			<br />
		 <hr size="4" color="gblue" width="550" align="left"/>
		<br/><br/><br/>	
      <?php if(isset($_GET['submit'])){
        $cell = 1;
		$sel = $_GET["sel"];  
        $kolom = $_GET["kolom"];  
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
       }
      ?>   
    </body>  
</html>
