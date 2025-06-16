
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
    <?php
    if(isset($_SESSION['login_status']) == 'zalogowany' && isset($_SESSION['login_status']) == 'zalogowany'){ ?>
    <th><a class="ups" href="tungtungtungsahur.php?podstrona=pracownicy_dodaj"><img width="35" height="35" src="https://cdn.pixabay.com/photo/2012/04/02/16/07/plus-24844_640.png" alt=""></a></th>
    <?php } else { }?>

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
    <?php
    if(isset($_SESSION['login_status']) == 'zalogowany' && isset($_SESSION['login_status']) == 'zalogowany'){ ?>
    <td><a class="ups" href="tungtungtungsahur.php?podstrona=pracownicy_edytuj&id=<?=$row['Id_pracownika']?>&nazwisko=<?= $row['Nazwisko'] ?>&imie=<?= $row['Imie'] ?>&nazwa=<?= $row['Nazwa'] ?>&miasto=<?= $row['Miasto'] ?>&data=<?= $row['Data_zatrudnienia'] ?>&wynagrodzenie=<?= $row['Wynagrodzenie'] ?>"><img width="35" height="35" src="https://www.svgrepo.com/show/451169/pencil-mark.svg" alt=""> </a><a class="ups" href="tungtungtungsahur.php?podstrona=pracownicy_usun&id=<?=$row['Id_pracownika']?>&nazwisko=<?= $row['Nazwisko'] ?>&imie=<?= $row['Imie'] ?>&nazwa=<?= $row['Nazwa'] ?>&miasto=<?= $row['Miasto'] ?>&data=<?= $row['Data_zatrudnienia'] ?>&wynagrodzenie=<?= $row['Wynagrodzenie'] ?>"><img width="35" height="35" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Red_X.svg/2048px-Red_X.svg.png" alt=""></a></td>
    <?php } else { }?>

</tr>   

<?php
}
} else {
echo "ni ma";
}
?>

</table>
