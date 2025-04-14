<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table{
            border-collapse: collapse;
        }
        td,th{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Tabela czytelnicy</h1>
<?php 
$sql = "select count(Nr_czytelnika) as liczba from czytelnicy;";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) { 
while($row = mysqli_fetch_assoc($result)) {
    ?>
<p>Tabela ma <?= $row["liczba"]?> wierszy</p>
<?php
}
} else {
echo "ni ma";
}
?>

<table>
<?php
$sql = "select * from czytelnicy;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { ?>

<tr>
    <th>Nr_czytelnika</th>
    <th>Nazwisko</th>
    <th>Imie</th>
    <th>Data_ur</th>
    <th>Ulica</th>
    <th>Kod</th>
    <th>Miasto</th>
    <th>Data_zapisania</th>
    <th>Data_skreslenia</th>
    <th>Nr_legitymacji</th>
    <th>Funkcja</th>
    <th>Plec</th>

</tr>
<?php
while($row = mysqli_fetch_assoc($result)) {
?>

<tr>
    <td><?= $row["Nr_czytelnika"]?></td>
    <td><?= $row["Nazwisko"]?></td>
    <td><?= $row["Imie"]?></td>
    <td><?= $row["Data_ur"]?></td>
    <td><?= $row["Ulica"]?></td>
    <td><?= $row["Kod"]?></td>
    <td><?= $row["Miasto"]?></td>
    <td><?= $row["Data_zapisania"]?></td>
    <td><?= $row["Data_skreslenia"]?></td>
    <td><?= $row["Nr_legitymacji"]?></td>
    <td><?= $row["Funkcja"]?></td>
    <td><?= $row["Plec"]?></td>



</tr>   

<?php
}
} else {
echo "ni ma";
}
?>

</table>
</body>
</html>