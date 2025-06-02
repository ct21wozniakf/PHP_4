
<h1>Tabela <i>pracownicy</i></h1>
<?php 
$sql = "select count(Id_pracownika) as liczba from pracownicy;";
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
$sql = "select *, stanowiska.Nazwa as nazwa from pracownicy inner join stanowiska on pracownicy.Id_stanowisko = stanowiska.Id_stanowisko ;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { ?>

<tr>
    <th>Id_pracownika</th>
    <th>Nazwisko</th>
    <th>Imie</th>
    <th>Nazwa_stanowiska</th>
    <th>Miasto</th>
    <th>Data_zatrudnienia</th>
    <th>Wynagrodzenie</th>

</tr>
<?php
while($row = mysqli_fetch_assoc($result)) {
?>

<tr>
    <td><?= $row["Id_pracownika"]?></td>
    <td><?= $row["Nazwisko"]?></td>
    <td><?= $row["Imie"]?></td>
    <td><?= $row["nazwa"]?></td>
    <td><?= $row["Miasto"]?></td>
    <td><?= $row["Data_zatrudnienia"]?></td>
    <td><?= $row["Wynagrodzenie"]?></td>

</tr>   

<?php
}
} else {
echo "ni ma";
}
?>

</table>
