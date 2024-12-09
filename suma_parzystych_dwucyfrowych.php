<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8"/>
	<style>

	</style>

</head>
<body>
<p style=" font-family:Arial; color: cornflowerblue; font-size: large; text-shadow: 1px 1px">
<?php 
for($i=10; $i<=99; $i++) 
{ 
if($i%2==0){ 
?>
<?= $i ?> |  
<?php } } ?>
</p>

</body>
</html>