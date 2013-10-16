<html>
	<head>
		<title>Tugas 1 Pemrograman Web PTI 2011</title>
	</head>
	<body style="background-color:cyan">
		<div style="text-align:center;"><img src="https://fbcdn-sphotos-g-a.akamaihd.net/hphotos-ak-snc7/420233_2381155108692_898016222_n.jpg"  width="800" height="250"></div>
		<hr color="blue" size="4">
		
		<table align="center" border="0">  
			<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">  
			  <tr>          
			  <td>Input Bilangan Pertama </td>  
			  <td>: <input type="text" size="15" name="bil1"></td>  
			  </tr>  
			  <tr>  
			  <td> Input Bilangan Kedua </td>  
			  <td>: <input type="text" size="15" name="bil2"></td>  
			  </tr>  
			  <tr>  
			  <td></td>  
			  <td valign="top"><input type="submit" name="hasil" value=" Hasil "></td>
			  </tr>  
			  </form>  
			  </table>  
			<br />
			
		<h3>Operasi Aritmatika</h3>
		<?php
		
			$a=0;
			$b=0;
			$a=$_GET["bil1"];
			$b=$_GET["bil1"];

			echo 'a = ',$a;
			echo ' <br />b = ',$b;
			echo '<br /><br />a + b = ', $a + $b;
			echo '<br />a - b = ', $a - $b;
			echo '<br />a x b = ', $a * $b;
			echo '<br />a : b = ', $a / $b;
			echo '<br />a % b = ', $a % $b;
			echo '<br />a >> b = ', $a >> $b;
			echo '<br />a << b = ', $a << $b;
		?>
		
		<h3>Operasi Logika dan Percabangan</h3>
		<?php
		$a = $_GET["bil1"];    
		$b = $_GET["bil2"];    
		if ($a<$b) {
			  echo "Bilangan Pertama Lebih Kecil Dari Pada Bilangan Kedua";
			} else if ($a>$b) {
			  echo "Bilangan Pertama Lebih Besar Dari Pada Bilangan Kedua";
			} else if ($a=$b) {
			  echo "Bilangan Pertama sama dengan Dari Pada Bilangan Kedua";
			}else echo "Masukkan Kembali";
			echo "<br /><br />";
		?>
		
		<h3>Operasi Perulangan</h3>
		<?php  
		$a = $_GET["bil1"];    
		$b = $_GET["bil2"];    
		$i = 0;  		 
		echo "mengulang bilangan pertama sebanyak bilangan ke dua<br/><br/>";
		while ($i < $b) {  
		  echo $a;  
		$i++;  
		}  
		?>  

		<hr color="blue">
		<p align="center" ><font color="blue">
		<small>copyright<br>
		by<br>
		Fauzul Adhim<br>
		110533430541<br>
		S1 PTI offering B 2011<br>
		2013<br></small>
		</p>
	</body>
</html>
