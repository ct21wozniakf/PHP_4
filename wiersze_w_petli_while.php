<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table style="background-color:lightgray;border: 1px solid gray;border-collapse:collapse; padding:10px; ">
    <?php
$i=0;
while ($i++ <5){ ?>

   <tr style="background-color:lightgray;border: 1px solid gray;border-collapse:collapse; padding:10px; ">
    <td style="background-color:lightgray;border: 1px solid gray;border-collapse:collapse; padding:10px; ">To jest wiersz numer <?php echo $i?></td>
</tr>
<?php }?>
</table>

</body>
</html>