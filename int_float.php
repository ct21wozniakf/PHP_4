<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8"/>
    <title>Pierwsza strona z PHP-em</title>

</head>
<body>

<?php
$liczba1 = 31;
$liczba2 = 61;
$liczba3 = 48.78;
$liczba4 = 69.41;
$dodaj = 59.85 + 100;
?>

<fieldset>
<legend>AD 2.</legend>

<p>Zmienna $liczba1 ma wartość <?= $liczba1 ?>, a funkcja is_int() zwraca dla niej wynik: <?php var_dump (is_int($liczba1)) ?></p>
<p>Zmienna $liczba2 ma wartość <?= $liczba2 ?>, a funkcja is_int() zwraca dla niej wynik: <?php var_dump (is_int($liczba2)) ?></p>
<p>Zmienna $liczba3 ma wartość <?= $liczba3 ?>, a funkcja is_int() zwraca dla niej wynik: <?php var_dump (is_int($liczba3)) ?></p>
<p>Zmienna $liczba4 ma wartość <?= $liczba4 ?>, a funkcja is_int() zwraca dla niej wynik: <?php var_dump (is_int($liczba4)) ?></p>
<br>
<br>
<p>Zmienna $liczba1 ma wartość <?= $liczba1 ?>, a funkcja is_float() zwraca dla niej wynik: <?php var_dump (is_float($liczba1)) ?></p>
<p>Zmienna $liczba2 ma wartość <?= $liczba2 ?>, a funkcja is_float() zwraca dla niej wynik: <?php var_dump (is_float($liczba2)) ?></p>
<p>Zmienna $liczba3 ma wartość <?= $liczba3 ?>, a funkcja is_float() zwraca dla niej wynik: <?php var_dump (is_float($liczba3)) ?></p>
<p>Zmienna $liczba4 ma wartość <?= $liczba4 ?>, a funkcja is_float() zwraca dla niej wynik: <?php var_dump (is_float($liczba4)) ?></p>



</fieldset>
<fieldset>
<legend>AD 3.</legend>

<p>Zmienna $dodaj ma wartość <?= $dodaj ?>, a funkcja is_numeric() zwraca dla niej wynik: <?php var_dump (is_numeric($dodaj)) ?></p>



</fieldset>
<fieldset>
<legend>AD 4.</legend>

<p>Stała PHP_INT_MAX ma wartość <?= var_dump(PHP_INT_MAX)?></p>



</fieldset>

</body>
</html>