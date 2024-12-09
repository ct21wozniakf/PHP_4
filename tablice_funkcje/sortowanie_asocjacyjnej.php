<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        table{
            border-collapse: collapse;
        }
        td{
            border: 1px dotted black;
            padding: 3px;
        }
        th{
            border: 1px dotted black;
            padding: 3px;
        }


    </style>
</head>
<body>
<?php
$movies = array("Skazani na Shawshank" => "dramat",
    "Nietykalni" => "biograficzny",
    "Władca Pierścieni: Powrót króla" => "fantasy",
    "Pulp Fiction" => "gangsterski",
    "Siedem" => "kryminał",
    "Podziemny krąg" => "thriller",
    "Django" => "western",
    "Król Lew" => "animacja",
    "Avengers: Wojna bez granic" => "akcja",
    "Dobry, zły i brzydki" => "western");
?>
<table>
<caption>asort</caption>
<tr><th>Klucz</th><th>Wartość</th></tr>
<?php
asort($movies);
foreach($movies as $a => $b) {
?>
<tr>
<td><?= $a ?></td>
<td><?= $b ?></td>
</tr>
<?php
}
?>
</tr>
</table>

<table>
<caption>ksort</caption>
<tr><th>Klucz</th><th>Wartość</th></tr>
<?php
ksort($movies);
foreach($movies as $a => $b) {
?>
<tr>
<td><?= $a ?></td>
<td><?= $b ?></td>
</tr>
<?php
}
?>
</tr>
</table>

<table>
<caption>arsort</caption>
<tr><th>Klucz</th><th>Wartość</th></tr>
<?php
arsort($movies);
foreach($movies as $a => $b) {
?>
<tr>
<td><?= $a ?></td>
<td><?= $b ?></td>
</tr>
<?php
}
?>
</tr>
</table>

<table>
<caption>krsort</caption>
<tr><th>Klucz</th><th>Wartość</th></tr>
<?php
krsort($movies);
foreach($movies as $a => $b) {
?>
<tr>
<td><?= $a ?></td>
<td><?= $b ?></td>
</tr>
<?php
}
?>
</tr>
</table>







</body>
</html>