<html>
<head>
  <title>Pass By Reference</title>
  
</head>
<body>
<p>contoh fungsi pass by reference</font></p>
<?php
function jumlah(&$nilai) {
    $nilai++;
}

$input=6;
jumlah($input);
echo $input;
?>
</body>
</html>