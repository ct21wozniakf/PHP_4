<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8"/>

</head>
<body>

<h3 style="color: tomato">Aktualna godzina</h3>
<p style="color: tomato"><?= date('G.i.s') ?></p>

<h3 style="color: navy">Osiem godzin później</h3>
<p style="color: navy"><?= date('G.i.s',strtotime("+ 8 hours")) ?></p>



</body>
</html>