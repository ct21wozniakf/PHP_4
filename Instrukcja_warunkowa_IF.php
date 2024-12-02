<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8"/>

</head>
<body>

<?php
$losowa = rand(1,30)
?>

<h2 style="text-align: center; color: darkorchid"><?= $losowa ?></h2>

<?php 
if($losowa>=20) {
?>    

<h4 style="text-align: center; color: magenta">Wylosowana liczba jest większa lub równa 20</h4>

<?php
}
?>

<?php 
if($losowa%2==0) {
?>

<h4 style="text-align: center; color: navy">Liczba jest parzysta</h4>

<?php
} 
else {
?>

<h4 style="text-align: center; color: navy">Liczba nie jest parzysta</h4>

<?php
}
?>

<?php 
if ($losowa <= 10) {
?>

<h4 style="text-align: center; color: deeppink">Pierwsza dziesiątka</h4>

<?php
} elseif($losowa <= 20 && $losowa > 10) {
?>

<h4 style="text-align: center; color: deeppink">Druga dziesiątka</h4>

<?php
} else {
?>

<h4 style="text-align: center; color: deeppink">Trzecia dziesiątka</h4>

<?php
}
?>
</body>
</html>