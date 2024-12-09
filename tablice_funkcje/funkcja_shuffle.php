<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <style>
        table{
            width: 100%;
            border-collapse: collapse;
            background-color: aliceblue;
            table-layout: fixed;
        }
        td{
            border: 2px solid dodgerblue;
            padding-top: 10px;
            padding-bottom: 10px;
            color: blue;
            text-align: center;
        }

    </style>

</head>
<body>
   
<?php

$tablica = range(0,10);
shuffle($tablica)
?>
<table>
    <tr>
<?php 

foreach($tablica as $t) {
    ?>
    <td><?= $t ?></td>

<?php
}

?>

    </tr>
</table>

</body>
</html>