<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
tr{border:solid 1px black;



}
        </style>
</head>
<body>
    <?php$d=date('t')?>
    <table>
        <caption><?php echo $d?></caption>
        <tr>
   <?php
   for($i=1; $i<=date('t'); $i++){?>
<?php if ($i%7==0){?>
<td><?=$i?></td></tr><tr>
<?php }
else { ?>

<td><?= $i?> </td>

   <?php}?>
<?php }?>
</tr>
   </table>
</body>
</html>
