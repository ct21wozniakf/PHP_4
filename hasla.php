<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8"/>

	<style>
		table { border-collapse: collapse; }
		td { border: 1px solid black; padding: 5px; text-align: center }
	</style>
</head>
<body>

<?php
$haslo1 = "mbank.pl";
$haslo2 = "rnbank.pl"
?>

<table>
	<tr>
		<td><b><?= $haslo1 ?></b></td>
		<td><b><?= $haslo2 ?></b></td>
	</tr>
	<tr>
		<td colspan="2">
			<?php if($haslo1==$haslo2) { ?>
			 <p>Hasła są takie same</p>
			<?php } else { ?>
			 <p>Hasła są różne</p>
			<?php } ?>
		</td>
	</tr>
</table>

</body>
</html>