<html>
<head>
  <title>Pass By Value</title>
  
</head>
<body>
<p>contoh fungsi pass by value</font></p>
<?php
function jumlah($nilai) {
    $nilai++;
}

$input=6;
jumlah($input);
echo $input;
?>
</body>
</html>