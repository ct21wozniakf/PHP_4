<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8"/>
    <title>Działania matematyczne</title>

</head>
<body>

<fieldset>
<legend>AD 1.</legend>
<?php 
$x = 5;
$y = 15;
?>

<p>Wynik dodawania 5 i 15 wynosi <?= $x+$y ?></p>
<p>Wynik odejmowania 5 i 15 wynosi <?= $x-$y ?></p>
<p>Wynik mnożenia 5 i 15 wynosi <?= $x*$y ?></p>
<p>Wynik dzielenia 5 przez 15 wynosi <?= $x/$y ?></p>
<p>Reszta z dzielenia 5 przez 15 wynosi <?= $x%$y ?></p>

</fieldset>
<fieldset>
<legend>AD 2.</legend>
<?php
$a = 4;
$b = 35;
?>
<p>Obwód prostokąta o bokach długości 4 i 35 jest równy <?= $a*2+$b*2 ?></p>
<p>Pole prostokąta o bokach długości 4 i 35 jest równy <?= $a*$b ?>j<sup>2</sup></p>


</fieldset>
<fieldset>
<legend>AD 3.</legend>
<?php
$r = 16;
$alfa = 93;
?>
<p>Obwód koła o promieniu 16 jest równy <?= round(2*pi()*$r, 3) ?></p>
<p>Pole koła o promieniu 16 jest równe <?= round(pi()*$r**2, 4) ?>j<sup>2</sup></p>
<p>Pole wycinka koła o promieniu 16 i kącie środkowym 93° jest równe <?= round(pi()*$alfa*$r**2/360, 3) ?>j<sup>2</sup></p>


</fieldset>
</body>
</html>