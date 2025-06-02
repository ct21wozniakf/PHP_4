
<h1>Tabela <i>wypożyczenia</i></h1>
<?php 
$sql = "select count(Nr_transakcji) as liczba from wypozyczenia;";
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
$sql = "select * from wypozyczenia;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { ?>

<tr>
    <th>Nr_transakcji</th>
    <th>Sygnatura</th>
    <th>Id_pracownika</th>
    <th>Nr_czytelnika</th>
    <th>Data_wypozyczenia</th>
    <th>Data_zwrotu</th>


</tr>
<?php
while($row = mysqli_fetch_assoc($result)) {
?>

<tr>
    <td><?= $row["Nr_transakcji"]?></td>
    <td><?= $row["Sygnatura"]?></td>
    <td><?= $row["Id_pracownika"]?></td>
    <td><?= $row["Nr_czytelnika"]?></td>
    <td><?= $row["Data_wypozyczenia"]?></td>
    <td><?= $row["Data_zwrotu"]?></td>


</tr>   

<?php
}
} else {
echo "ni ma";
}
?>

</table>
