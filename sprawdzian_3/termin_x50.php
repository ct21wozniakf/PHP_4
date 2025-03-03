<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table{
            border-collapse: collapse;
            border: 1px solid lightgray;
        }
        td{
            padding: 5px;
            border: 1px solid lightgray;
        }
        .zatwierdz{
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>
   
<table>
<legend>Terminy</legend>
<?php
    for ($n = 1; $n < 51; $n++) {
?>
<tr>
<td><label for=<?php $n ?>> Termin <?= $n?></label></td>
<td><input type="date" name="<?php $n?>" id="<?php $n?>"></td>
</tr>
<?php
}
?>
       <tr>
            <td colspan="2"><input type="submit" value="Zatwierdź" class="zatwierdz"></td>
        </tr>
</table>
</body>
</html>

    