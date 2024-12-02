<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8"/>

</head>
<body>

<?php 
$tekst = 'Zycie jest to opowieść idioty pełna wrzasku i wściekłości, nic nie znacząca'
?>

<p>Cytat: <q><?= $tekst ?></q></p>

<p>Liczba wyrazów: <?= str_word_count($tekst) ?></p>

</body>
</html>