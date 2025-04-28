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
    <h1>Tabela <i>książki</i></h1>
<?php 
$sql = "select count(Sygnatura) as liczba from ksiazki;";
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
$sql = "select * from ksiazki;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { ?>

<tr>
    <th>Sygnatura</th>
    <th>Tytuł</th>
    <th>Nazwisko</th>
    <th>Imie</th>
    <th>Wydawnictwo</th>
    <th>Miejsce_wyd</th>
    <th>Rok_wyd</th>
    <th>Objetosc_ks</th>
    <th>Cena</th>
    <th>Id_dzial</th>


</tr>
<?php
while($row = mysqli_fetch_assoc($result)) {
?>

<tr>
    <td><?= $row["Sygnatura"]?></td>
    <td><?= $row["Tytul"]?></td>
    <td><?= $row["Nazwisko"]?></td>
    <td><?= $row["Imie"]?></td>
    <td><?= $row["Wydawnictwo"]?></td>
    <td><?= $row["Miejsce_wyd"]?></td>
    <td><?= $row["Rok_wyd"]?></td>
    <td><?= $row["Objetosc_ks"]?></td>
    <td><?= $row["Cena"]?></td>
    <td><?= $row["Id_dzial"]?></td>

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