<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8"/>

</head>
<body>

<?php
$r = 6;
?>

<p style = "text-align: center; border: solid darkgreen; border-width: 1px 20px">Pole koła o promieniu <?= $r ?> jest równe <?= round(pi()*$r**2, 3) ?> j<sup>2</sup></p>

</body>
</html>