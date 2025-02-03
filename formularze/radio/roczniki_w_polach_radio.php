<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<fieldset style="border: 2px solid black;">
<legend>Roczniki</legend>
<form>
    
<?php

$r=range(2010,2025);

foreach($r as $l) {
?>

<label for="<?= $l ?>">
  <input type="radio" name="rok" id="<?= $l ?>" value="<?= $l ?>"> <?= $l ?></br>
</label>

<?php
}
?>
</fieldset>
</form>
</body>
</html>