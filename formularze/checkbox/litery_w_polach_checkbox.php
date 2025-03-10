<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        label{
            margin-right: 15px;
        }
    </style>
</head>
<body>
    
<fieldset style="border:2px solid blue">
    <legend>Alfabet</legend>
<form method="post">
<?php 

$litery=range('a','z');

foreach($litery as $l)
{
?>

<label for="<?= $l ?>" >
  <input type="checkbox" name="rok[]" id="<?= $l ?>" value="<?= $l ?>"> <?= $l ?>
</label>

<?php
}
?>
<input type="submit" value="Wybierz">
</form>

<?php

print_r($_POST);

if($_SERVER["REQUEST_METHOD"] === 'POST')
{
    if(isset($_POST["rok"]))
    {
        if(count($POST["rok"]===1))
            {
                echo " "
            }


    }
}
?>






</fieldset>




</body>
</html>