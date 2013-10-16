<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
  <title>Studi Kasus 1</title>
</head>

<body>
  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    <table border=0>
      <tr>
        <td>Masukkan Jam :</td>
        <td><input type="number" name="jam" /></td>
		<td><input type="submit" name="submit" value="OK" /></td>
      </tr>
    </table>
    <hr size="4" color="green" width="300" align="left"/>
  </form>
  
  <h1>
  <?php if(isset($_POST['submit'])){
  function greeting() {
    echo "<br/><br/>";
    $date = $_POST['jam'];
    if ($date>=0 and $date<10) {
      echo "Selamat Pagi";
    } else if ($date>=10 and $date<15) {
      echo "Selamat Siang";
    } else if ($date>=15 and $date<19) {
      echo "Selamat Sore";
    } else if ($date>=19 and $date<24) {
      echo "Selamat Malam";
    }else echo "  maaf tidak ada jam negatif";
    echo "<br /><br />";
  }
  ?>
  <?php greeting(); ?>
  <br>
  <?php } ?>
  
</body>
</html>
