<html>
<head>
		<title>Studi Kasus 2</title>  
	</head>  
		<body bgcolor="cyan">   
		<h3>Membuat Tabel</h3>  
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
		Jumlah baris: <input type="text" name="baris" />
		Jumlah kolom: <input type="text" name="kolom" />
		<input type="submit" name="submit" />
		</form>  
			<br />
		 <hr size="4" color="gblue" width="550" align="left"/>
			
      <?php if(isset($_GET['submit'])){
        $baris = $_GET["baris"];  
        $kolom = $_GET["kolom"];  
		echo " Table dengan $baris Baris dan $kolom Kolom <br/><br/>";
        function generate($baris, $kolom){         
          echo "<table border='1' cellpadding='15'>";            
          for($i = 0; $i < $baris; $i++){  
            echo "<tr>";  
              for($j = 0; $j < $kolom; $j++){   
                echo "<td> </td>";  
              }  
            echo "</tr>";  
          }  
          echo "</table>";  
      	}  
        if(isset($baris) AND isset($kolom)){  
            generate($baris, $kolom);  
        }  
       }
      ?>   
    </body>  
</html>
