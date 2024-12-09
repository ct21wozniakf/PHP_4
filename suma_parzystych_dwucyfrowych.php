<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8"/>
	<style>

	</style>

</head>
<body>
<?php 
$suma;
?>

<p style=" font-family:Arial; color: cornflowerblue; font-size: large; text-shadow: 1px 1px">
<?php 
for($i=10; $i<=99; $i++) 
{ 
if($i%2==0){ 
?>
<?php ++$suma; ?>
<?= $i ?> |
  
<?php } } ?> 
</p>


<p style=" font-family:Arial; color: cornflowerblue; font-size: large; text-shadow: 1px 1px"> Suma powyższych liczb jest równa <?= $suma ?></p>
</body>
</html>