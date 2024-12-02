<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8"/>

</head>
<body>

<fieldset style="border-color: chocolate">
<legend>Dzisiejsza data</legend>
<p style="color: chocolate;"><?= date('d.m.y') ?></p>


</fieldset>

<fieldset style="border-color: DarkGoldenRod">
<legend>Data za 100 dni</legend>

<p style="color: DarkGoldenRod"><?= date('d.m.y', strtotime("+ 100 day")) ?></p>


</fieldset>

</body>
</html>