<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">

</head>
<body>
   
<?php

$parzyste = range(0,12,2);
$dziesiatki = range(-10,100,10);
$polowki = range(-5.5,5.5,0.5);
$litery_od_em = range('m','u');
$litery_wstecz = range('X','E');

?>

<pre><?php print_r($parzyste) ?></pre>
<?php 

foreach ($parzyste as $p) {
    echo $p . ' ';
}

?>
<br>
<?php 

foreach ($dziesiatki as $d) {
    echo $d . ' ';
}

?>
<br>
<?php 

foreach ($polowki as $pol) {
    echo $pol . ' ';
}

?>
<br>
<?php 

foreach ($litery_od_em as $loe) {
    echo $loe . ' ';
}

?>
<br>
<?php 

foreach ($litery_wstecz as $lw) {
    echo $lw . ' ';
}

?>




</body>
</html>