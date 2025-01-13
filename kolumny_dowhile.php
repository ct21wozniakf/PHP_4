<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table style="border-collapse:collapse;  ">
<tr>
    <?php
$i=1;
do { ?>

  
    <td style="background-color:greenyellow;border: 1px solid green; padding:10px; ">To jest kolumna numer <?php echo $i?></td>

<?php }
while($i++ <5);?></tr>
</table>

</body>
</html>