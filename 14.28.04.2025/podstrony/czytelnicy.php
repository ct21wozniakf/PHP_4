
    <h1>Tabela <i>czytelnicy</i></h1>
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
$sql = "select *, CONCAT(SUBSTRING(Kod, 1, 2), '-', SUBSTRING(Kod, 3, 3)) AS kod_pocztowy from czytelnicy;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { ?>

<?php $znak = "-";
$pozycja = 3; ?>

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
    <td><?= $row["kod_pocztowy"]?></td>
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
