<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8"/>
    <title>Pierwsza strona z PHP-em</title>

</head>
<body>

<?php $title="Pierwsza strona z PHP-em" ;
 $link1="https://www.o2.pl/" ;
 $link2="https://m.youtube.com/?gl=PL&hl=pl";
 $link3="https://www.roblox.com/" ?>

<h1><?= $title ?></h1>
<ol style="list-style-type: decimal-leading-zero">
    <li><a href="<?= $link1 ?>">o2</li>
    <li><a href="<?= $link2 ?>">yt</li>
    <li><a href="<?= $link3 ?>">rbx</li>
</ol>

</body>
</html>