<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<form method="post">
    
<label for="biale">Usuń "białe" znaki </label> <input type="text" name="biale" id="biale"><br>
<label for="ukosniki">Usuń ukośniki (backslash) </label> <input type="text" name="ukosniki" id="ukosniki"><br>
<label for="encje">Zamień znaki HTML na tzw. encje </label> <input type="text" name="encje" id="encje"><br>
<input type="submit" value="wyślij">

<?php if($_SERVER ['REQUEST_METHOD'] === "POST") { ?>

<?php 
    
$biale = $_POST["biale"];
$trimbiale = trim($biale);

$ukosniki = $_POST["ukosniki"];
$stripukosniki = stripslashes($ukosniki);

$encje = $_POST["encje"];
$specialencje = htmlspecialchars($encje);

?>

<p>Tekst z pola <em>biale</em> bez funkcji <b>trim</b>: <?php var_dump($biale) ?>
<p>Tekst z pola <em>ukosniki</em> bez funkcji <b>stripslashes</b>: <?php var_dump($ukosniki) ?>
<p>Tekst z pola <em>encje</em> bez funkcji <b>htmlspecialchars</b>: <?php var_dump($encje) ?>
<br>
<br>
<p>Tekst z pola <em>biale</em> z zastosowaniem funkcji <b>trim</b>: <?php var_dump($trimbiale) ?>
<p>Tekst z pola <em>ukosniki</em> z zastosowaniem funkcji <b>stripslashes</b>: <?php var_dump($stripukosniki) ?>
<p>Tekst z pola <em>encje</em> z zastosowaniem funkcji <b>htmlspecialchars</b>: <?php var_dump($specialencje) ?>
<?php }?>
</form>
</body>
</html>