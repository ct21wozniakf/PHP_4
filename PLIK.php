<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$owoce=array("Tworzenie","stron","aplikacji","internetowych");
?>
  
    <pre>
    <?php print_r($owoce);?>
</pre>
<?php list($n1,$n2,$n3,$n4)=$owoce?>
<h3 style="text-align:center;"><?php echo $n1,' ',$n2,' ',"i",' ',$n3,' ',$n4 ?>.</h3>
</body>
</html>