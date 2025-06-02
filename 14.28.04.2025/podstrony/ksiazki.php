
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
$sql = "select *, CONCAT(FLOOR(CENA), ' zł ', LPAD(ROUND((CENA - FLOOR(CENA)) * 100), 2, '0'), ' gr') CENAW, dzialy.Nazwa as nazwa from ksiazki inner join dzialy on ksiazki.Id_Dzial = dzialy.Id_dzial;";
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
    <th>Nazwa_dzial</th>


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
    <td><?= $row["CENAW"]?></td>
    <td><?= $row["nazwa"]?></td>

</tr>   

<?php
}
} else {
echo "ni ma";
}
?>

</table>
